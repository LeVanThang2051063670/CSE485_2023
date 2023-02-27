--a.SELECT * FROM baiviet WHERE baiviet.ma_tloai = 2;
--b.SELECT * FROM baiviet WHERE baiviet.ma_tgia = 1;
--c.SELECT * FROM theloai WHERE theloai.ma_tloai NOT IN (SELECT baiviet.ma_tloai FROM baiviet);
--d.SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

select * from baiviet, theloai where baiviet.ma_tloai=theloai.ma_tloai and theloai.ten_tloai="Nhạc trữ tình";

select * from baiviet, tacgia where baiviet.ma_tgia=tacgia.ma_tgia and tacgia.ten_tgia="Nhacvietplus";

select ten_tloai from theloai where ma_tloai not in (select ma_tloai from baiviet group by ma_tloai);

select ma_bviet, tieude, ten_bhat, ten_tgia, ten_tloai, ngayviet from baiviet, tacgia, theloai where baiviet.ma_tgia=tacgia.ma_tgia and baiviet.ma_tloai=theloai.ma_tloai;

select ten_tloai from theloai, baiviet where baiviet.ma_tloai=theloai.ma_tloai group by baiviet.ma_tloai limit 1;

select ten_tgia from tacgia, baiviet where baiviet.ma_tgia=tacgia.ma_tgia group by baiviet.ma_tgia limit 2;
