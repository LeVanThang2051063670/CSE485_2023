a.SELECT * FROM baiviet WHERE baiviet.ma_tloai = 2;
b.SELECT * FROM baiviet WHERE baiviet.ma_tgia = 1;
c.SELECT * FROM theloai WHERE theloai.ma_tloai NOT IN (SELECT baiviet.ma_tloai FROM baiviet);
d.SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;