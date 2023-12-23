<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Scan;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScansController extends Controller
{
    public function createScan() {
        $nl_country_code = '+31';
        $response = Http::get('http://localhost:8080/api/v1/customers');
        if ($response->ok()) {
            $customers = $response->json()['customers'];
            $scan = Scan::create([
                'fraudulent_count' => 0
            ]);
            $all_ips = array();
            $all_ibans = array();

            foreach ($customers as $customer) {
                $all_ips[] = $customer['ipAddress'];
                $all_ibans[] = $customer['iban'];
            }
            $ips_counts = array_count_values($all_ips);
            $ibans_counts = array_count_values($all_ibans);
            $count_fraudulent = 0;
            foreach ($customers as $customer) {
                $fraudulent = false;
                $reasons = array();
                // check if the customer has the same ip or iban
                if ($ips_counts[$customer['ipAddress']] > 1 ) {
                    $fraudulent = true;
                    $reasons[] = "same_ip";
                }
                if ($ibans_counts[$customer['iban']] > 1) {
                    $fraudulent = true;
                    $reasons[] = "same_iban";
                }
                // check if the customer has other countries number
                if (strpos($customer['phoneNumber'], $nl_country_code) !== 0) {
                    $fraudulent = true;
                    $reasons[] = "non_nl_number";
                }
                // check if the customer is under 18
                $birth_date = new DateTime($customer['dateOfBirth']);
                if($birth_date->diff(new DateTime())->y < 18) {
                    $fraudulent = true;
                    $reasons[] = "under_18";
                }
                Customer::create([
                    'customer_id' => $customer['customerId'],
                    'first_name' => $customer['firstName'],
                    'last_name' => $customer['lastName'],
                    'fraudulent' => $fraudulent,
                    'reasons' => implode(",", $reasons),
                    'scan_id' => $scan['id']
                ]);
                if($fraudulent === true) {
                    $count_fraudulent++;
                }
            }
            $scan->fraudulent_count = $count_fraudulent;
            $scan->save();
            return redirect()->route('scan-detail',['id' => $scan['id']]);
        } else {
            echo "Error";
        }
    }
    public function viewScan() {
        return view('scan-detail');
    }
    public function viewAllScans() {
        return view('scan-history');
    }
}
