<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://192.168.18.3/smpn6
 *
 * @package    core
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Tambah Angkatan';
$string['admincategory'] = 'Angkatan: {$a}';
$string['allowcategorythemes'] = 'Izinkan tema angkatan';
$string['configallowcategorythemes'] = 'Jika Anda mengaktifkan ini, maka tema dapat disetel di tingkat angkatan. Ini akan mempengaruhi semua angkatan dan mata pelajaran kecuali mereka telah secara khusus menetapkan tema mereka sendiri. PERINGATAN: Mengaktifkan tema angkatan dapat mempengaruhi kinerja sistem.';
$string['configdefaultrequestcategory'] = 'Mata pelajaran yang diminta oleh pengguna dengan kemampuan untuk meminta kursus baru dalam konteks sistem akan ditempatkan dalam angkatan ini kecuali pengguna dapat memilih angkatan yang berbeda.';
$string['configdefaultrequestedcategory'] = 'Angkatan bawaan untuk memasukkan Mata Pelajaran yang diminta, jika disetujui.';
$string['configenablecourserequests'] = 'Jika diaktifkan, pengguna dengan kemampuan untuk meminta Mata Pelajaran baru (moodle/Mata Pelajaran:request) akan memiliki opsi untuk meminta kursus. Kemampuan ini tidak diperbolehkan untuk salah satu peran bawaan. Ini dapat diterapkan dalam konteks sistem atau kategori.';
$string['configlockrequestcategory'] = 'Jika diaktifkan, pengguna yang memiliki hak untuk meminta Mata Pelajaran baru pada tingkat sistem tidak dapat memilih Angkatan pada formulir permintaan Mata Pelajaran baru. Sebagai alternatif, hak meminta Mata Pelajaran baru dapat dibatasi hanya pada Angkatan tertentu dengan memberikan izin pada konteks Angkatan tersebut.';
$string['confignavshowcategories'] = 'Tampilkan Angkatan Mata Pelajaran pada bilah navigasi dan blok navigasi. Mata Pelajaran yang sedang diikuti pengguna akan tetap ditampilkan pada menu "Mata Pelajaran Saya" tanpa dikelompokkan berdasarkan Angkatan.';
$string['configsitemaxcategorydepth'] = 'Kedalaman Angkatan Maksimum';
$string['configsitemaxcategorydepthhelp'] = 'Menentukan kedalaman maksimum sub-Angkatan yang ditampilkan saat menampilkan daftar Angkatan atau daftar pilihan. Angkatan pada tingkat yang lebih dalam akan ditampilkan sebagai tautan dan dapat diperluas oleh pengguna menggunakan AJAX.';
$string['configvisiblecourses'] = 'Tampilkan Mata Pelajaran dalam Angkatan yang disembunyikan seperti biasa';
$string['contextlocking_desc'] = 'Pengaturan ini memungkinkan akses hanya-baca diterapkan pada Angkatan, Mata Pelajaran, aktivitas, atau blok yang dipilih.';
$string['coursemgmt'] = 'Kelola Mata Pelajaran dan Angkatan';
$string['defaultrequestcategory'] = 'Angkatan bawaan untuk permintaan Mata Pelajaran';
$string['linkadmincategories'] = 'Tautkan menu administrasi';
$string['linkadmincategories_help'] = 'Jika diaktifkan, menu administrasi akan ditampilkan sebagai tautan di navigasi dan akan mengarah ke halaman administrasi terkait.';
$string['lockrequestcategory'] = 'Cegah pemilihan Angkatan';
$string['navshowcategories'] = 'Tampilkan Angkatan Mata Pelajaran';
$string['navshowmycoursecategories'] = 'Tampilkan Mata Pelajaran Angkatan Saya';
$string['navshowmycoursecategories_help'] = 'Jika diaktifkan, Mata Pelajaran pada menu "Mata Pelajaran Saya" akan dikelompokkan berdasarkan Angkatan di blok navigasi (khusus tema berbasis Klasik).';
$string['navsortmycoursessort_help'] = 'Apakah Mata Pelajaran ditampilkan mengikuti urutan pada Administrasi Situs > Mata Pelajaran > Kelola Mata Pelajaran dan Angkatan, atau diurutkan berdasarkan abjad? Pengaturan ini hanya berlaku untuk tema berbasis Klasik.';
$string['profilecategory'] = 'Angkatan';
$string['profilecategoryname'] = 'Nama Angkatan (harus unik)';
$string['profilecategorynamenotunique'] = 'Nama Angkatan sudah digunakan';
$string['profileconfirmcategorydeletion'] = 'Terdapat {$a} kolom dalam angkatan ini yang akan dipindahkan ke angkatan di atas (atau di bawah jika angkatan ini berada di tingkat teratas). <br  /> Apakah Anda tetap ingin menghapus angkatan ini?';
$string['profilecreatecategory'] = 'Tambahkan Angkatan Baru';
$string['profilecreatenewcategory'] = 'Membuat Angkatan Baru';
$string['profiledeletecategory'] = 'Menghapus Angkatan';
$string['profileeditcategory'] = 'Mengedit Angkatan: {$a}';
$string['questioncwqpfscheck'] = 'Satu atau lebih soal acak pada ujian dikonfigurasi untuk mengambil soal dari campuran kategori bank soal bersama dan tidak bersama. Lihat <a href="{$a->reporturl}">laporan soal acak</a> dan <a href="{$a->docsurl}">dokumentasi Moodle</a>.';
$string['questioncwqpfsok'] = 'Bagus. Tidak ada soal acak pada ujian yang menggunakan campuran kategori bank soal bersama dan tidak bersama.';
$string['searchdefaultcategory'] = 'Kategori pencarian bawaan';
$string['searchdefaultcategory_desc'] = 'Hasil dari kategori area pencarian yang dipilih akan ditampilkan secara bawaan.';
$string['searchenablecategories'] = 'Tampilkan hasil berdasarkan kategori';
$string['searchenablecategories_desc'] = 'Jika diaktifkan, hasil pencarian akan ditampilkan berdasarkan kategori.';
$string['searchhideallcategory'] = 'Sembunyikan kategori "Semua Hasil"';
$string['searchhideallcategory_desc'] = 'Jika dicentang, kategori "Semua Hasil" tidak akan ditampilkan pada halaman hasil pencarian.';
