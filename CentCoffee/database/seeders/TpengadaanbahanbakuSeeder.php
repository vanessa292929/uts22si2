use Illuminate\Database\Seeder;

class TpengadaanbahanbakuSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengadaan_bahan_baku')->updateOrInsert([
            'kode_pengadaan_bahan_baku' => 1,
        ], [
            'subjek_pengadaan_bahan_baku' => 'Tepung Baru',
            'tanggal_pengadaan_bahan_baku' => '2024-10-15',
            'waktu_pengadaan_bahan_baku' => '10:00:00',
            'status_pengadaan_bahan_baku' => 'Pending',
            'kode_prioritas' => 'PR001',
            'kode_pegawai' => 'PG001',
        ]);
    }
}
