# 💧kp-spamsku

Sistem pembayaran air **KP-SPAMS** (Kelompok Pengelolah Sistem Penyediaan Air Minum dan Sanitasi)  Desa Pronojiwo Lumajang.

## **Latar Belakang**

KP-SPAMS (Kelompok Pengelolah Sistem Penyediaan Air Minum dan Sanitasi) merupakan perusahaan daerah yang bergerak dibidang jasa pelayanan air di desa-desa. Tentunya dalam melayani pelanggan tersebut harus didukung oleh sarana dan prasarana yang memadai dan juga harus didukung oleh kinerja organisasi atau perusahaan dengan sistem yang baik dan teratur. Tetapi saat ini, pembayaran masih menggunakan sistem manual sehingga petugas masih harus menagih ke rumah pengguna layanan air KP-SPAMS satu per satu. Hal ini menyebabkan tidak efektif dalam pembayaran.

Selain itu, dalam proses pembayaran air setiap bulan sering terjadi masalah, banyak tagihan yang belum di bayar oleh pelanggan. Oleh karena itu dari pihak pengelolah KP-SPAMS Desa Pronojiwo Lumajang ingin menyediakan sebuah sistem pembayaran yang bisa membantu dalam keefektifan pembayaran, memberikan informasi biaya tagihan air yang harus dibayar pelanggan setiap bulannya dan bisa di akses dengan mudah oleh pelanggan di mana saja sehingga meminimalisir pekerjaan petugas saat melakukahn baca meter ke lapangan.

## **Prasyarat**

- PHP 5.4 Or higher
- Web Browser

## **Dokumentasi**
- Dokumentasi kode dapat membaca di [official](https://codeigniter.com/docs) codeigniter

## **Cara Menggunakan**
- Letakkan projek ini didalam web server di /var/www atau htdocs
- Atau menggunakan server php, masuk ke root proyek dan ketik ``` php -S localhost:8000 ```

## **Cara Deployment**

- Soon

## Kontributor

Bisa menggunakan [all-contributors](https://github.com/all-contributors/all-contributors)
atau secara manual seperti ini:

@ffadilaputra
@SnapeSnoop

 ## TODO
 - Mengambil meteran bulan sebelunya dan ditambahkan ke tagihan sekarang, query meteran akhir dari bulan sebelumnya ✅
 - Total bayar pembayaran ngebug pas di **Total Bayar** ✅
 - Filter Laporan perbulan dan tahun, serta cetak laporan.
 - Konfirmasi pembayaran, admin -> klik konfirmasi, user -> input nominal pembayarn & bukti transfer (berdasarkan kode pembayaran) -> pada data pembayaran ikut terupdate status pembayaran "Belum Lunas" menjadi Lunas.
  

## Terima Kasih

Project ini dibangun menggunakan:

- [Codeigniter](https://codeigniter.com/) sebagai kerangka kerja.

- [MariaDB](https://mariadb.org/) sebagai basis data.

- [AdminLTE](https://adminlte.io/) sebagai interface pada admin.

---

MIT License

Copyright (c) 2020 KP-SPAM

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
