<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        //
    }

        public function login()
    {
        return view('login');
    }

    public function profile(Request $request){
        $username = $request->query('username', 'Ketua Kelas');

        return view('profile', compact('username'));
    }
    public function dashboard(Request $request){

        $username = $request->query('username', 'Ketua Kelas');

       $progressUTS = [
        [
            'nama'     => 'Youhana Aulia Zahwa',
            'nim'      => '252410103002',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Rismay Viantika Martha Putri',
            'nim'      => '252410103006',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 75,
        ],
        [
            'nama'     => 'Ulfatun Ni\'mah',
            'nim'      => '252410103009',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 60,
        ],
        [
            'nama'     => 'Felix Jericho Moniaga',
            'nim'      => '252410103014',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Arya Damar Yusuf Putra',
            'nim'      => '252410103017',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 45,
        ],
        [
            'nama'     => 'Robby Ibrahimovic Wibowo',
            'nim'      => '252410103020',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Risma Ayuning Tiyas',
            'nim'      => '252410103016',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Fitri Ramadhani',
            'nim'      => '252410103019',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 80,
        ],
        [
            'nama'     => 'Tristan Tsurayyaa Mumtaaz',
            'nim'      => '252410103030',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 55,
        ],
        [
            'nama'     => 'Rayhanuun Aura Chantiqa',
            'nim'      => '252410103099',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Bima Tri Kurniawan',
            'nim'      => '252410103028',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 70,
        ],
        [
            'nama'     => 'Achmad Kavin Rabbani',
            'nim'      => '252410103029',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Dhani Ramadhani',
            'nim'      => '252410103033',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Ilham Aunillah',
            'nim'      => '252410103034',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 65,
        ],
        [
            'nama'     => 'Veda Bastian Ar Ramzy',
            'nim'      => '252410103037',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 40,
        ],
        [
            'nama'     => 'Mohamad Febri Pratama',
            'nim'      => '252410103039',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Reloudryan Rosdi Al Rasyid',
            'nim'      => '252410103044',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 85,
        ],
        [
            'nama'     => 'Rizal Lazuardi',
            'nim'      => '252410103045',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Seto Aji',
            'nim'      => '252410103072',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Aji Pengestu',
            'nim'      => '252410103104',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 50,
        ],
        [
            'nama'     => 'Abiyu Ben Rajaha',
            'nim'      => '252410103051',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 70,
        ],
        [
            'nama'     => 'Muhammad Davin Ardiansyah',
            'nim'      => '252410103054',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Dinar Atha Dwi Novelian',
            'nim'      => '252410103056',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Benny Javerson D.A',
            'nim'      => '252410103106',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 60,
        ],
        [
            'nama'     => 'Najwan Azhim Muntazhar Anas',
            'nim'      => '252410103067',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Altha Lingga Leksono',
            'nim'      => '252410103068',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 45,
        ],
        [
            'nama'     => 'Andrew Goldstein Silalahi',
            'nim'      => '252410103069',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 80,
        ],
        [
            'nama'     => 'Hayden Putra Pradana Mulyadi',
            'nim'      => '252410103040',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Dava Julian Eka Putra',
            'nim'      => '252410103074',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Muhammad Fathan Fajri',
            'nim'      => '252410103075',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 55,
        ],
        [
            'nama'     => 'Augusta Yardha Husna',
            'nim'      => '252410103077',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 90,
        ],
        [
            'nama'     => 'Galih Andra Dwinata',
            'nim'      => '252410103079',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'M. Fathoni Abd Ghofur Al Jabbar',
            'nim'      => '252410103088',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Kyran Al Ghazali Pramono',
            'nim'      => '252410103090',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 65,
        ],
        [
            'nama'     => 'Rizky Maulana Hidayat',
            'nim'      => '252410103091',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 75,
        ],
        [
            'nama'     => 'Said Idrus Abdullah',
            'nim'      => '252410103093',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ]];

        $totalMahasiswa = count($progressUTS);
        $totalSelesai = count(array_filter($progressUTS, function($mahasiswa) {
            return $mahasiswa['status'] === 'Selesai';
        }));

        $totalProses = count(array_filter($progressUTS, function($mahasiswa) {
            return $mahasiswa['status'] === 'Sedang Dikerjakan';
        }));

        $totalBelum = count(array_filter($progressUTS, function($mahasiswa) {
            return $mahasiswa['status'] === 'Belum Mulai';
        }));

        $totalProgress = array_sum(array_column($progressUTS, 'progress'));
        $rataRata = $totalMahasiswa > 0 ? round($totalProgress / $totalMahasiswa, 1) : 0;

        return view('dashboard', compact('username','totalMahasiswa','totalSelesai','totalProses','totalBelum','rataRata'
        ));
    }
    public function pengelolaan(Request $request){
        $username = $request->query('username', 'Ketua Kelas');

        $progressUTS = [
        [
            'nama'     => 'Youhana Aulia Zahwa',
            'nim'      => '252410103002',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Rismay Viantika Martha Putri',
            'nim'      => '252410103006',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 75,
        ],
        [
            'nama'     => 'Ulfatun Ni\'mah',
            'nim'      => '252410103009',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 60,
        ],
        [
            'nama'     => 'Felix Jericho Moniaga',
            'nim'      => '252410103014',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Arya Damar Yusuf Putra',
            'nim'      => '252410103017',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 45,
        ],
        [
            'nama'     => 'Robby Ibrahimovic Wibowo',
            'nim'      => '252410103020',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Risma Ayuning Tiyas',
            'nim'      => '252410103016',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Fitri Ramadhani',
            'nim'      => '252410103019',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 80,
        ],
        [
            'nama'     => 'Tristan Tsurayyaa Mumtaaz',
            'nim'      => '252410103030',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 55,
        ],
        [
            'nama'     => 'Rayhanuun Aura Chantiqa',
            'nim'      => '252410103099',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Bima Tri Kurniawan',
            'nim'      => '252410103028',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 70,
        ],
        [
            'nama'     => 'Achmad Kavin Rabbani',
            'nim'      => '252410103029',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Dhani Ramadhani',
            'nim'      => '252410103033',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Ilham Aunillah',
            'nim'      => '252410103034',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 65,
        ],
        [
            'nama'     => 'Veda Bastian Ar Ramzy',
            'nim'      => '252410103037',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 40,
        ],
        [
            'nama'     => 'Mohamad Febri Pratama',
            'nim'      => '252410103039',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Reloudryan Rosdi Al Rasyid',
            'nim'      => '252410103044',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 85,
        ],
        [
            'nama'     => 'Rizal Lazuardi',
            'nim'      => '252410103045',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Seto Aji',
            'nim'      => '252410103072',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Aji Pengestu',
            'nim'      => '252410103104',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 50,
        ],
        [
            'nama'     => 'Abiyu Ben Rajaha',
            'nim'      => '252410103051',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 70,
        ],
        [
            'nama'     => 'Muhammad Davin Ardiansyah',
            'nim'      => '252410103054',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Dinar Atha Dwi Novelian',
            'nim'      => '252410103056',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Benny Javerson D.A',
            'nim'      => '252410103106',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 60,
        ],
        [
            'nama'     => 'Najwan Azhim Muntazhar Anas',
            'nim'      => '252410103067',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Altha Lingga Leksono',
            'nim'      => '252410103068',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 45,
        ],
        [
            'nama'     => 'Andrew Goldstein Silalahi',
            'nim'      => '252410103069',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 80,
        ],
        [
            'nama'     => 'Hayden Putra Pradana Mulyadi',
            'nim'      => '252410103040',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'Dava Julian Eka Putra',
            'nim'      => '252410103074',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Muhammad Fathan Fajri',
            'nim'      => '252410103075',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 55,
        ],
        [
            'nama'     => 'Augusta Yardha Husna',
            'nim'      => '252410103077',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 90,
        ],
        [
            'nama'     => 'Galih Andra Dwinata',
            'nim'      => '252410103079',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ],
        [
            'nama'     => 'M. Fathoni Abd Ghofur Al Jabbar',
            'nim'      => '252410103088',
            'status'   => 'Selesai',
            'progress' => 100,
        ],
        [
            'nama'     => 'Kyran Al Ghazali Pramono',
            'nim'      => '252410103090',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 65,
        ],
        [
            'nama'     => 'Rizky Maulana Hidayat',
            'nim'      => '252410103091',
            'status'   => 'Sedang Dikerjakan',
            'progress' => 75,
        ],
        [
            'nama'     => 'Said Idrus Abdullah',
            'nim'      => '252410103093',
            'status'   => 'Belum Mulai',
            'progress' => 0,
        ]];
        return view('pengelolaan', compact('username','progressUTS'));
    }
}
