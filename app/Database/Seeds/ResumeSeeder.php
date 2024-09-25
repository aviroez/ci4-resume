<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ResumeModel;
use App\Models\ResumeDetailModel;

class ResumeSeeder extends Seeder
{
    public function run()
    {
        $resumeModel = new ResumeModel();
        $resumeDetailModel = new ResumeDetailModel();

        $data = $this->getData();
        foreach ($data as $key => $value) {
            $resumeModel->insert($value, false);
        }
    }

    public function getData() {
        return [
            [
                'company' => 'SIRCLO',
                'title' => 'Marketpace Enabler Management',
                'description' => '
                    <ol>
                        <li>Connect user to Marketplace</li>
                        <li>Process order from marketplace</li>
                        <li>Integration order to ERP(Oodo)</li>
                        <li>Integration financial report to Netsuite</li>
                    </ol>
                ',
                'tag' => 'web',
                'uploads' => json_encode([
                    'uploads/sirclo/sirclo-pwa-oms1.png',
                    'uploads/sirclo/sirclo-pwa-oms2.png',
                ]),
                'date_from' => '2021-03-08',
                'date_to' => '2024-09-20',
            ],
            [
                'company' => 'Freelance',
                'title' => 'Mobile-based Attendance Management Application',
                'description' => '
                    <ol>
                        <li>Daily attandance & Action tool for employee</li>
                        <li>Update location coordinate</li>
                        <li>Capture image</li>
                    </ol>
                ',
                'tag' => 'mobile',
                'uploads' => json_encode([
                    'uploads/pdamhss/pdamhss-1.png',
                    'uploads/pdamhss/pdamhss-2.png',
                    'uploads/pdamhss/pdamhss-3.png',
                    'uploads/pdamhss/pdamhss-4.png',
                    'uploads/pdamhss/pdamhss-5.png',
                    'uploads/pdamhss/pdamhss-6.png',
                    'uploads/pdamhss/pdamhss-7.png',
                    'uploads/pdamhss/pdamhss-9.png',
                ]),
                'date_from' => '2021-02-28',
                'date_to' => null,
            ],
        ];
    }
}
