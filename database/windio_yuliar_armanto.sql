-- 1
use indonesia;

-- 2
select * from districts;
select * from provinces;
select * from regencies;
select * from villages;

-- 3
alter table provinces rename to  provinsi ;

-- 4
alter table regencies rename to  kabupaten_kota ;

-- 5
alter table districts rename to  kecamatan ;

-- 6
alter table villages rename to  desa ;

-- 7 
select  desa.id as id_desa, desa.name as desa, provinsi.name as provinsi from desa 
join kecamatan on desa.district_id = kecamatan.id
join kabupaten_kota on kecamatan.regency_id = kabupaten_kota.id
join provinsi on kabupaten_kota.province_id = provinsi.id ;

select * from provinsi;
select * from kabupaten_kota;
select * from kecamatan;
select * from desa;

-- 8
select kecamatan.id as id_kecamatan, kecamatan.name as kecamatan, provinsi.name as provinsi from kecamatan
join kabupaten_kota on kecamatan.regency_id = kabupaten_kota.id
join provinsi on kabupaten_kota.province_id = provinsi.id  ;

-- 9
select kabupaten_kota.id as id_kabupaten_kota, kabupaten_kota.name as kabupaten_kota, provinsi.name as provinsi from kabupaten_kota
join provinsi on kabupaten_kota.province_id = provinsi.id  ;




