<?php
if (! function_exists('sis_namahari')) {
    function sis_namahari()
    {
        $result = ['senin','selasa','rabu','kamis','jumat'];
        return $result;
    }
}
if (! function_exists('sis_jabatan')) {
    function sis_jabatan()
    {
        $result = ['guru','kepala sekolah','wakil kepala sekolah','tata usaha','operator'];
        return $result;
    }
}
if (! function_exists('sis_jamakhir')) {
    function sis_jamakhir($jam,$lama,$rentang)
    {
        $menit  = $rentang * $lama;
        $date1 = "2022-01-01 ".$jam;
        $date = new DateTime($date1);
        $date_plus = $date->modify("+".$menit." minutes");
        return $date_plus->format("H:i");
    }
}
if (! function_exists('sis_cekarsip')) {
    function sis_cekarsip($arsip)
    {
        $arsip = (!is_null($arsip)) ? "<span class='text-success'>sudah ada</span>" : NULL ;
        return $arsip;
    }
}
if (! function_exists('sis_akseskhusus')) {
    function sis_akseskhusus()
    {
        $result = ['tidak ada','kesiswaan','kepegawaian','kurikulum','aset','perpustakaan','administrasi'];
        sort($result);
        return $result;
    }
}
if (! function_exists('sis_ratarata')) {
    function sis_ratarata($data)
    {
        $result = array_sum($data) / count($data);
        return $result;
    }
}
if (! function_exists('sis_sesiujian')) {
    function sis_sesiujian()
    {
        $sesi = [
            'harian' => 'harian',
            'ulangan' => 'ulangan',
            'uts' => 'ulangan tengah semester',
            'uas' => 'ulangan akhir semester'
        ];
        return $sesi;
    }
}
if (! function_exists('sis_arsipdokumen')) {
    function sis_arsipdokumen()
    {
        $dokumen    = [
            'ktp' => 'kartu tanda penduduk',
            'kk' => 'kartu keluarga',
            'sk_awal' => 'surat keputusan awal',
            'npwp' => 'nomor pokok wajib pajak',
            'karis' => 'karis',
            'skgb' => 'skgb',
            'sd' => 'ijasah sd',
            'smp' => 'ijasah smp',
            'sma' => 'ijasah sma',
            's1' => 'ijasah s1',
            's2' => 'ijasah s2',
            's3' => 'ijasah s3',
            'sertifikat' => 'sertifikat',
            'lainnya' => 'lainnya'
        ];
        return $dokumen;
    }
}
if (! function_exists('sis_waktupelajaran')) {
    function sis_waktupelajaran($jam,$hari,$lama)
    {
        $djam = [
            1 => "07:00",
            2 => "07:45",
            3 => "08:30",
            4 => "09:15",
            5 => "10:30",
            6 => "11:10",
            7 => "12:45",
            8 => "13:25",
            9 => "14:05",
            10 => "14:45" 
        ];
        $djam_jumat = [
            1 => "07:00",
            2 => "07:40",
            3 => "08:20",
            4 => "09:00",
            5 => "10:10",
            6 => "10:50",
            7 => "12:45",
            8 => "13:25",
            9 => "14:05",
            10 => "14:45" 
        ];
        if ($hari == 'jumat') {
            $jam_awal = $djam_jumat[$jam];
            $jadwal = $jam_awal.'-'.sis_jamakhir($jam_awal,$lama,40);
        } else {
            $rentang = 40;
            if ($jam <= 4) {
                $rentang = 45;
            }
            $jam_awal = $djam[$jam];
            $jadwal = $jam_awal.'-'.sis_jamakhir($jam_awal,$lama,$rentang);
        }
        return $jadwal;
    }
}

$datapegawaixs = [
    ['Drs. H. Aang Dohiri, M.Ag','kepala sekolah'	,'laki-laki'],
    ['Dra. Hj. Hawan M, M.Pd.','guru','perempuan'],
    ['Dra. Dedeh Ruhaedah, M.Pd','guru','perempuan'],
    ['Komar Syaripudin, M.Pd','guru','laki-laki'],
    ['Otim Miharja, M.Pd','wakil kepala sekolah'	,'laki-laki'],
    ['Dra. Nina Herlina, M.Pd','guru','perempuan'],
    ['Drs. Lalan Ruslani, M.Pd','guru','laki-laki'],
    ['Tatang Rohata, M.Pd','guru','laki-laki'],
    ['Sahroni Irwana, M.Pd','guru','laki-laki'],
    ['H. Endang Ohan, S.Pd','guru','laki-laki'],
    ['Dra. Ida Siti Khodijah, M.Pd','guru','perempuan'],
    ['Hj. Nina Nuriah Hayati, M.Pd','guru','perempuan'],
    ['Acep Sabiqul Khaerat, M.Pd','wakil kepala sekolah','laki-laki'],
    ['Epi Apriyadi','guru','laki-laki'],
    ['Asep Taufik, M.Pd','guru','laki-laki'],
    ['Iin Kuraesin, M.Pd.l','guru','laki-laki'],
    ['Eem Khodimah, S.Ag. M.Pd','guru','laki-laki'],
    ['Tati Suharti, S.Pd','guru','laki-laki'],
    ['Dede Kurnia, M.Pd','guru','laki-laki'],
    ['Hj. Susi Lestari, S.Si','guru','perempuan'],
    ['Dodi Kusmayadi, M.Pd','guru','laki-laki'],
    ['Tantan Siti Sondari, M.Pd','guru','laki-laki'],
    ['Hj. Siti Mulyati, S.Pd','guru','perempuan'],
    ['Dra. Imas Winarti, M.Pd','guru','perempuan'],
    ['Wida Maryani, M.Pd','guru','perempuan'],
    ['Ai Siti Rohimah, M.Pd','guru','perempuan'],
    ['Dra. Hj. R. Nina Ratnawulan, M.Pd','guru','perempuan'],
    ['Didin Hidayat, S.Pd','guru','laki-laki'],
    ['M. Saefullah, S.Pd','guru','laki-laki'],
    ['Maria Nurhayati, S.Pd','guru','perempuan'],
    ['Tantri Oktriani, S.Pd','guru','perempuan'],
    ['Monika Permanasari, S.Pd','guru','perempuan'],
    ['Awan Karyawan, M.Pd','wakil kepala sekolah','laki-laki'],
    ['Dede Nurul, M.Pd','guru','perempuan'],
    ['Eros Rostika, S.Pd','guru','perempuan'],
    ['Rika Herdiana, S.Pd','guru','perempuan'],
    ['Nanang Sutresna, S.Pd','guru','laki-laki'],
    ['Dra. Hj. Sri Kusrini','guru','perempuan'],
    ['Drs. Agus kadar S','guru','laki-laki'],
    ['Tedi Sopiadi, S.Pd','guru','laki-laki'],
    ['Yati Mulyawati, S.Pd','guru','perempuan'],
    ['Acep Romawan, M.Pd','wakil kepala sekolah','laki-laki'],
    ['Lina Roslina, S.Pd','guru','perempuan'],
    ['N. Lela Marlia, S.Pd','guru','perempuan'],
    ['Haris Iskandar, S.Ag','guru','laki-laki'],
    ['Sheny Meylida, S.Pd','guru','perempuan'],
    ['Dian Pardiana, S.Pd','guru','laki-laki'],
    ['Evi Safitri Herdian, S.Pd','guru','perempuan'],
    ['Sri Sany Utami, S.Pd','guru','perempuan'],
    ['Mumu Hermunadi, S.Pd','guru','laki-laki'],
    ['Epul Abdul Majid, S.Pd','guru','laki-laki'],
    ['Mella Miranti, S.Pd.l','guru','perempuan'],
    ['Sam Persiana, S.Pd','guru','laki-laki'],
    ['Nine Agustine, S.Sos','guru','perempuan'],
    ['Eulis Waslia, S.Pd','guru','perempuan'],
    ['Reni kartika Sari, S.Pd','guru','perempuan'],
    ['Ridwan Sidiq, S.Pd','guru','laki-laki'],
    ['Hana Fitrianingtyas, S.Pd','guru','perempuan'],
    ['Hasanah Eka Saputra, S.sos','guru','laki-laki'],
    ['Egi Asti Agustin, S.Pd','guru','laki-laki'],
    ['Dian Diana, S.Pd','guru','laki-laki'],
    ['Jeinal Setia P., S.Pd','guru','laki-laki'],
    ['Dudi Prismawan, S.Pd','guru','laki-laki'],
    ['Jatnika Zenal Arifin, S.Pd','guru','laki-laki'],
    ['Afryan Ginanjar, S.Pd','guru','laki-laki'],
    ['Vidi Sumayya Urfani R, S.Pd','guru','laki-laki'],
    ['Rizka Fauziah, S.Pd','guru','laki-laki'],
    ['Asep Riki SM, S.Pd','guru','laki-laki'],
    ['Aji Komallasari, S.Pd','guru','laki-laki'],
    ['Rahmat Taupik, S.Pd','guru','laki-laki'],
    ['Reisya Afrilia, S.Pd','guru','perempuan'],
    ['Irfan Hielmy Dzulfikar, S.Pd','guru','laki-laki'],
    ['Fikry Rahmatillah, S.Pd','guru','laki-laki'],
    ['Windi Asri Permana, S.Pd','guru','laki-laki'],
    ['Apipudin, S.Pd','guru','laki-laki'],
    ['Euis Siti Aisah, S.Pd','guru','perempuan'],
    ['Evi Nurhayati, S.Pd','guru','perempuan'],
    ['Dia Fidiawti, S.Pd','guru','perempuan'],
    ['Mia Kurniasih, S.Pd','guru','perempuan'],
    ['Asep Bagus Maulana, S.Pd','guru','laki-laki'],
    ['Muhammad Fauzi Ridwan, S.Pd','guru','laki-laki'],
    ['Noor Muthia Sakinah, S.Pd','guru','laki-laki'],
    ['Atang Yusnandi, S.Pd','guru','laki-laki'],
    ['Juwita Permatasari, S.Pd','guru','perempuan'],
    ['Eri Jauhar Asmara, S.Kom','guru','laki-laki'],
    ['Emuh Muhlis, S.Kom','guru','laki-laki'],
    ['Yayin Layinul Husni, S.T','guru','laki-laki'],
    ['Sopi Amaliah, S.T','guru','perempuan'],
    ['Asep Saepulloh, S.T','guru','laki-laki'],
    ['Maya Rosmayati','tata usaha','perempuan'],
    ['Randi Teja Malfasha, S.Pd','tata usaha','laki-laki'],
    ['Ade Elis','tata usaha','perempuan'],
    ['Uca Sulaeman','tata usaha','laki-laki'],
    ['Rini Nuraini','tata usaha','perempuan'],
    ['Nadira Nandiani','tata usaha','perempuan'],
    ['Fajar Gumilar	','operator','laki-laki'],
    ['Momo','tata usaha','laki-laki'],
    ['Hadi Sofyan','tata usaha','laki-laki'],
    ['Ajat Sudrajat','tata usaha','laki-laki'],
    ['Imat Ruhimat','tata usaha','laki-laki'],
    ['Rahmat Hidayatulloh','tata usaha','laki-laki'],
    ['Muhidin','tata usaha','laki-laki'],
    ['Agus','tata usaha','laki-laki'],
    ['Uu Barnaz','tata usaha','laki-laki'],
    ['Yadi Supriadi','tata usaha','laki-laki'],
            ];