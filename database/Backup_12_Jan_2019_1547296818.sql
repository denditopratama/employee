DROP TABLE tabel_role;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_role` AS select `tbl_user`.`id_user` AS `id_user`,`tbl_user`.`username` AS `username`,`tbl_user`.`password` AS `password`,`tbl_user`.`nama` AS `nama`,`tbl_user`.`nip` AS `nip`,`tbl_user`.`admin` AS `admin`,`tbl_user`.`tujuan` AS `tujuan`,`tbl_role`.`role` AS `role`,`tbl_user`.`unit` AS `unit`,`tbl_user`.`divisi` AS `divisi`,`tbl_user`.`sub_unit` AS `sub_unit`,`tbl_user`.`jabatan` AS `jabatan`,`tbl_user`.`status_karyawan` AS `status_karyawan`,`tbl_user`.`status_aktif` AS `status_aktif`,`tbl_user`.`status_tugas` AS `status_tugas`,`tbl_user`.`gmail` AS `gmail` from (`tbl_role` join `tbl_user` on((`tbl_user`.`admin` = `tbl_role`.`admin`)));

INSERT INTO tabel_role VALUES("1","sdm","13bb8b589473803f26a02e338f949b8c","Admin SDM - Umum","-","1","0","Super Admin","19","2","","","4","1","2","");
INSERT INTO tabel_role VALUES("8","admin","d69ed7e8520a6ee31d5ab1d597726f34","Super Admin","-","1","0","Super Admin","0","2","","BANG ADMIN","0","1","0","100668005486913410963");
INSERT INTO tabel_role VALUES("9999","tampung","tampung","-","tampung","1","0","Super Admin","0","0","","","0","0","0","");
INSERT INTO tabel_role VALUES("10173","marketing","c769c2bd15500dd906102d9be97fdceb","Admin Marketing","0","1","0","Super Admin","","6","","","4","1","0","");
INSERT INTO tabel_role VALUES("10174","direktur","4fbfd324f5ffcdff5dbf6f019b02eca8","Admin Direktur","0","1","0","Super Admin","","0","","","0","0","0","");
INSERT INTO tabel_role VALUES("10175","pengembangan","7111494d4869feeddd17652b086e0b67","Admin Pengembangan Bisnis","0","1","0","Super Admin","","0","","","0","0","0","");
INSERT INTO tabel_role VALUES("10176","teknik","58029eb6d2dd138b3da6ee4b2bb71d8c","Admin Teknik","0","1","0","Super Admin","","0","","","0","0","0","");
INSERT INTO tabel_role VALUES("10177","jmrbtip","498ab3e5fa941a600ac8b28da348791d","Admin TIP","0","1","0","Super Admin","","0","","","0","1","0","");
INSERT INTO tabel_role VALUES("10178","keuangan","a4151d4b2856ec63368a7c784b1f0a6e","Admin Keuangan","0","1","0","Super Admin","","0","","","0","0","0","");
INSERT INTO tabel_role VALUES("10025","D0005","fed2bb44e5db4d3b34370d2ed061fbbd","Irwan Artigyo Sumadiyo","D0005","2","0","Direktur Utama","1","1","1","4","2","1","2","");
INSERT INTO tabel_role VALUES("10150","D0008","0630f67b2c1133eb96171a870d5147a9","Tita Paulina Purbasari","D0008","3","0","Direktur","1","1","1","5","3","1","1","");
INSERT INTO tabel_role VALUES("10151","D0009","0cd125dfbdbe9d67ada8ebd76246f41c","Dian Takdir Badrsyah","D0009","3","0","Direktur","1","1","1","6","2","1","2","");
INSERT INTO tabel_role VALUES("6","10022","93a27b0bd99bac3e68a440b48aa421ab","Sumarsono","10022","4","0","General Manager","19","2","54","106","3","1","1","");
INSERT INTO tabel_role VALUES("7","10001","52d5c97cf60257405716d84b9a885d31","Hubby Ramdhani","10001","4","0","General Manager","10","7","30","75","3","1","1","");
INSERT INTO tabel_role VALUES("10003","10014","7b9d31aa17b849b238ab79cef0733041","Meta Herlina Puspitaningtyas","10014","4","0","General Manager","3","5","6","32","3","1","1","");
INSERT INTO tabel_role VALUES("10006","10017","24064e6576a74af1b8eda89277c6b659","Sri Rejeki Handayani","10017","4","0","General Manager","18","3","50","95","3","0","1","");
INSERT INTO tabel_role VALUES("10008","10020","c1722a7941d61aad6e651a35b65a9c3e","Donny Ikhwan","10020","4","0","General Manager","4","4","10","46","3","1","1","");
INSERT INTO tabel_role VALUES("10010","10023","7b8bc3700ce886e8627f41e799fe764f","Imad Zaky Mubarak","10023","4","0","General Manager","2","6","2","8","3","1","1","");
INSERT INTO tabel_role VALUES("10024","10040","f250daff6a09865ff432821b2adac54f","Mintari Yulianingsih","10040","4","0","General Manager","24","7","70","190","3","1","1","");
INSERT INTO tabel_role VALUES("10172","10004","d783823cc6284b929c2cd8df2167d212","Dian Agustian Hadi","10049","4","0","General Manager","18","3","50","95","3","1","1","");
INSERT INTO tabel_role VALUES("10181","10051","a536fb5480db8bdbb84daffe345c675b","Saktia Lesan Dianasari","10051","4","0","General Manager","26","7","76","200","3","1","1","");
INSERT INTO tabel_role VALUES("10182","10050","eeb29740e8e9bcf14dc26c2fff8cca81","Aprilizayanti Putri","10050","4","0","General Manager","27","7","77","202","3","1","1","");
INSERT INTO tabel_role VALUES("9","10003","f5dffc111454b227fbcdf36178dfe6ac","Uci Sanusi","10003","5","0","Manager","18","3","52","98","3","1","1","");
INSERT INTO tabel_role VALUES("10","10007","9cdf26568d166bc6793ef8da5afa0846","R.A. Ayu Suzanne P","10007","5","0","Manager","4","4","11","49","3","1","2","");
INSERT INTO tabel_role VALUES("10001","10010","4bc457f7b180362dfb1ae8b0a3da32a7","Irwansyah Rinaldhi","10010","5","0","Manager","14","7","38","87","3","1","1","");
INSERT INTO tabel_role VALUES("10002","10011","a2369958a9645eac52b58a8134e2ef5a","Dede Ahmad Nurhadi","10011","5","0","Manager","13","7","36","147","3","1","1","");
INSERT INTO tabel_role VALUES("10004","10015","342b5fe6486788799659c39bbfc3fa02","Marlina Ririn Indriyani","10015","5","0","Manager","2","6","3","10","3","1","1","");
INSERT INTO tabel_role VALUES("10005","10016","1ce9168a60deae4a994dbd5b2d145699","Engkun Purkonudin","10016","5","0","Manager","11","7","33","87","3","1","1","");
INSERT INTO tabel_role VALUES("10007","10019","fd32b50714854403e9e1001a44becc65","Hanna Farida Tampubolon","10019","5","0","Manager","10","7","32","83","3","1","1","");
INSERT INTO tabel_role VALUES("10011","10025","76d0baca6075c45cd8a3a55fa6a23c05","Tria Oktaviani","10025","5","0","Manager","4","4","11","48","3","1","1","");
INSERT INTO tabel_role VALUES("10012","10027","3882c5a9869d86def6b7be879605522e","Sumarmi","10027","5","0","Manager","19","2","55","108","3","1","1","");
INSERT INTO tabel_role VALUES("10014","10030","b42f87724dee54c6fc1ccf14a0e536d4","Irwan Zaini Luthfi","10030","5","0","Manager","13","7","35","147","3","1","1","");
INSERT INTO tabel_role VALUES("10023","10039","2a8009525763356ad5e3bb48b7475b4d","Ade Gustika","10039","5","0","Manager","3","5","58","186","3","1","1","");
INSERT INTO tabel_role VALUES("10027","PK102","04e246e949e3a9b2b80c4d7d3bef872d","Herdwin Nofrian","PK102","5","0","Manager","18","3","53","101","5","1","2","");
INSERT INTO tabel_role VALUES("10031","PK016","04ce83bf1967d561285890241abf11eb","Handa Rudita","PK016","5","0","Manager","3","5","9","41","5","1","2","");
INSERT INTO tabel_role VALUES("10051","PK038","beb1c0c148f8a01a9b7a19e4f7d009c1","Adhi Sujana","PK038","5","0","Manager","11","7","33","87","5","1","2","");
INSERT INTO tabel_role VALUES("10057","PK045","0e0f18e07ffc9e2d40ac8e0f2d3246fd","Andi Rusdiana","PK045","5","0","Manager","5","4","15","62","5","1","2","");
INSERT INTO tabel_role VALUES("10059","PK047","00ea5c35f3381114e4471f36b26998e1","Mustofa","PK047","5","0","Manager","6","4","17","62","5","1","2","");
INSERT INTO tabel_role VALUES("10063","PK051","c579bd5d9a445f646be67f38a3547b78","Rizalulloh","PK051","5","0","Manager","5","4","13","62","5","1","2","");
INSERT INTO tabel_role VALUES("10082","PK073","a76982be20687afd6e3b55b5c2b75c63","Vishnu Damar Sasongko","PK073","5","0","Manager","18","3","51","96","5","1","2","");
INSERT INTO tabel_role VALUES("10083","PK074","731b2949bd21b228de95f6750ff35e70","G. Heryawan Indrayatna","PK074","5","0","Manager","2","1","5","25","5","1","2","");
INSERT INTO tabel_role VALUES("10086","PK077","b5d757bf5b47ab148a9fcb8fcf0ce365","Lowig Caesar S.","PK077","5","0","Manager","8","4","26","62","5","1","2","");
INSERT INTO tabel_role VALUES("10093","10042","425f116bf53f051c57d1670a04fb4a0c","Slamet Purwanto","10042","5","0","Manager","19","2","57","122","3","1","1","");
INSERT INTO tabel_role VALUES("10094","10043","15f937f0a5598016008f107d8cbdf0a2","Indri Kurnia Lestari","10043","5","0","Manager","3","5","7","34","3","1","1","");
INSERT INTO tabel_role VALUES("10095","10044","9c16b0e83f09596202f402261f25c8a9","Tisa Yuanita","10044","5","0","Manager","2","6","4","18","3","1","1","");
INSERT INTO tabel_role VALUES("10096","10045","997e65474a248252883b485717f7d098","Evil Ramadhani","10045","5","0","Manager","4","4","12","55","3","1","1","");
INSERT INTO tabel_role VALUES("10101","10047","eccd9f7dc92858b741132fda313130cf","Yati Melasari","10047","5","0","Manager","19","2","55","109","3","1","1","");
INSERT INTO tabel_role VALUES("10154","PK089","e8d09acfaad3ecf09242168db4788494","Wahju Widodo","PK089","5","0","Manager","5","4","15","62","5","1","2","");
INSERT INTO tabel_role VALUES("10180","10100","ac2d43ef3f26cc74de242202e822ecb0","Anggrainy","10100","5","0","Manager","19","2","54","108","3","1","1","");
INSERT INTO tabel_role VALUES("10183","10046","827a9e878169d065f4a9a6c451ba0207","Usep Widya Kusmayadi","10046","5","0","Manager","11","7","33","126","3","1","1","");
INSERT INTO tabel_role VALUES("10184","10101","6dfc35c47756e962ef055d1049f1f8ec","Tony Tri Hendarta","10101","5","0","Manager","19","2","56","119","3","1","1","");
INSERT INTO tabel_role VALUES("10187","10102","696b0709b9a2d7d9e2c25b71476ec255","Ihsanuddin Saputra, ST","10102","5","0","Manager","5","4","14","62","3","1","1","");
INSERT INTO tabel_role VALUES("10188","10103","f53eb4122d5e2ce81a12093f8f9ce922","Khrisnawan Arief Wicaksono, ST","10103","5","0","Manager","4","4","11","34","3","1","1","");
INSERT INTO tabel_role VALUES("10009","10021","f702defbc67edb455949f46babab0c18","Roni Wijaya","10021","6","0","Assistant Manager","2","6","3","12","3","1","1","");
INSERT INTO tabel_role VALUES("10013","10029","827051e35b2c76f7004a6cbc76f42d4a","Edmundus Edy Pancaningtyas","10029","6","0","Assistant Manager","19","2","55","111","3","1","1","");
INSERT INTO tabel_role VALUES("10015","10031","d2cb583f4b5bdc51b965ae555ee6bca5","Katni","10031","6","0","Assistant Manager","18","3","52","77","3","1","1","");
INSERT INTO tabel_role VALUES("10037","PK023","ff06415acd8ad03505030f2baac4607c","Widyadji Sasono","PK023","6","0","Assistant Manager","18","3","51","97","5","1","2","");
INSERT INTO tabel_role VALUES("10040","PK027","dced105c62a12c5b94280160612ad040","Gatri Ayuning Lestari","PK027","6","0","Assistant Manager","18","3","53","102","5","1","2","");
INSERT INTO tabel_role VALUES("10042","PK029","594eee4c191bc382c7e3c749a3444b8a","Isna Rifai","PK029","6","0","Assistant Manager","5","7","15","67","5","1","2","");
INSERT INTO tabel_role VALUES("10044","PK031","3168f142ce3904a787b2ab3f68ae5968","Abdurrahman","PK031","6","0","Assistant Manager","4","4","12","49","5","1","2","");
INSERT INTO tabel_role VALUES("10045","PK032","3384d017ec0e7f0f17d2c3d18b608c24","Muhammad Fahri","PK032","6","0","Assistant Manager","6","4","18","67","5","1","2","");
INSERT INTO tabel_role VALUES("10053","PK040","c2797a8ce242cb02cd045f49b1754740","Edi Junaedi","PK040","6","0","Assistant Manager","6","4","18","67","5","1","2","");
INSERT INTO tabel_role VALUES("10054","PK041","e900266bd33ff5bbf04c76871467509a","Lucyanna Nilasary","PK041","6","0","Assistant Manager","19","1","56","121","5","0","0","");
INSERT INTO tabel_role VALUES("10055","PK043","e9f7574dc8aa752126443c5d3b2bf509","Agus Setyawan","PK043","6","0","Assistant Manager","7","5","20","67","5","1","2","");
INSERT INTO tabel_role VALUES("10056","PK044","e8c3701613c6192f5578534912bc410f","Hendry","PK044","6","0","Assistant Manager","6","4","18","67","5","1","2","");
INSERT INTO tabel_role VALUES("10058","PK046","fdf1adf0071c444ec897f638453f5d67","Rizal Kamaruzzaman","PK046","6","0","Assistant Manager","4","4","11","67","5","1","2","");
INSERT INTO tabel_role VALUES("10060","PK048","064fa76b894021616335263a1c7fe7f2","Dian Ika Ningrum","PK048","6","0","Assistant Manager","19","2","55","110","5","1","2","");
INSERT INTO tabel_role VALUES("10062","PK050","343979a6222fcf5c4f50a8fd4ce710d1","Adya Kemara","PK050","6","0","Assistant Manager","2","6","59","27","5","1","2","");
INSERT INTO tabel_role VALUES("10066","PK054","9276d8c623b5f0930f93cf07fae0845f","Angga Saputra","PK054","6","0","Assistant Manager","2","1","3","63","5","0","2","");
INSERT INTO tabel_role VALUES("10078","PK069","a59eeaf48b22ebf1fee0b715731dc7ca","Arsindiany Alambago","PK069","6","0","Assistant Manager","18","3","51","97","5","0","0","");
INSERT INTO tabel_role VALUES("10087","PK078","24cbad67a9545c21b12b86ad024906e1","Arif Rahman","PK078","6","0","Assistant Manager","8","7","26","67","5","1","2","");
INSERT INTO tabel_role VALUES("10088","PK079","4d81e61f13169060aaef7103749b888a","Antonius Catur Satriono","PK079","6","0","Assistant Manager","6","7","17","67","5","1","2","");
INSERT INTO tabel_role VALUES("10092","10041","6d38b80c1da3bd9d8717ce47fea2acd7","Kristiana Live Sonya","10041","6","0","Assistant Manager","2","6","3","26","3","1","1","");
INSERT INTO tabel_role VALUES("10149","10099","b5d4eea20a5609fc4663e196962f6499","Roni Yusnandar","10099","6","0","Assistant Manager","19","2","55","111","3","1","1","");
INSERT INTO tabel_role VALUES("10153","PK088","e8112adaafb932bcab8dfdb9e2a7802c","Arief Fauzi","PK088","6","0","Assistant Manager","18","3","52","100","5","1","2","");
INSERT INTO tabel_role VALUES("10157","PK093","0bc89c6d26889cac577a464e7b77e594","Mohammad Rizal Syarief","PK093","6","0","Assistant Manager","5","4","14","67","5","1","2","");
INSERT INTO tabel_role VALUES("10159","PK096","b0dc070f96ee8d600d2680e8329e1b29","Indah Susanti","PK096","6","0","Assistant Manager","2","6","4","19","5","1","2","");
INSERT INTO tabel_role VALUES("10161","PK098","8596a6ac50e165aebcc1595c461eff24","Adia Puja Pradana","PK098","6","0","Assistant Manager","2","6","3","12","5","1","2","");
INSERT INTO tabel_role VALUES("2","PK068","556f17c2cd7d50470fd0cb03588a10da","Aprillia Hermansyah","PK068","7","0","Senior Officer","4","4","10","47","5","1","2","");
INSERT INTO tabel_role VALUES("4","PK060","d69ed7e8520a6ee31d5ab1d597726f34","Dendito Pratama","PK060","7","0","Senior Officer","19","2","57","123","5","1","2","107915472535905905447");
INSERT INTO tabel_role VALUES("10016","10032","6aeb68d1bdff2c5e503eed93c51dd74d","Muhamad Agus Sunardi","10032","7","0","Senior Officer","14","7","39","156","4","1","2","");
INSERT INTO tabel_role VALUES("10017","10033","b4dda6951b6af2e9d06224a597eac5fe","Setya Prayitno","10033","7","0","Senior Officer","14","7","42","156","4","1","2","");
INSERT INTO tabel_role VALUES("10018","10034","dbc6904b9ae5239ad74f90306daae0ad","Bagus Sugiharto","10034","7","0","Senior Officer","8","7","26","164","4","1","2","");
INSERT INTO tabel_role VALUES("10019","10035","329d1ea6acb272924f991d523b2d2b80","Karmin","10035","7","0","Senior Officer","8","7","27","148","4","1","2","");
INSERT INTO tabel_role VALUES("10020","10036","7c127e0c66f06e58c7c7310a7c6fa488","Rudi tatang","10036","7","0","Senior Officer","13","7","37","148","5","1","2","");
INSERT INTO tabel_role VALUES("10021","10037","c38f0ea6e6c3aa84b9f662bb03673c97","Sandy Irawan","10037","7","0","Senior Officer","14","7","43","156","5","1","2","");
INSERT INTO tabel_role VALUES("10022","10038","0f6b1f657ac30ab76519ed4c677e9909","Irwan Pahala Simanungkalit","10038","7","0","Senior Officer","17","7","49","180","4","1","2","");
INSERT INTO tabel_role VALUES("10034","PK020","a349c90fb067eae78defd650c86e942e","Ibnu Sarjono","PK020","7","0","Senior Officer","5","4","16","71","5","1","2","");
INSERT INTO tabel_role VALUES("10035","PK021","942e07c72a2f12ef5368b7dfd5c53116","Salmadi","PK021","7","0","Senior Officer","12","7","48","131","5","1","2","");
INSERT INTO tabel_role VALUES("10048","PK035","57bf2d8dc369f5238ad508888f101ef9","Reza Ahmad Fauzi","PK035","7","0","Senior Officer","5","5","13","71","5","1","2","");
INSERT INTO tabel_role VALUES("10061","PK049","6ff9c235860eb08d0fb2af6e5751c51a","Sofi Ratna Furi","PK049","7","0","Senior Officer","10","7","68","187","5","1","2","");
INSERT INTO tabel_role VALUES("10064","PK052","64eb6f33d79221581bfe7df31d065889","Ardo Yudha Barnesa","PK052","7","0","Senior Officer","3","5","6","36","5","1","2","");
INSERT INTO tabel_role VALUES("10065","PK053","2e1e200308d8c68e3d75bf9a079003f6","Melly Febriyanti","PK053","7","0","Senior Officer","2","6","3","15","5","1","2","");
INSERT INTO tabel_role VALUES("10069","PK057","ae5318388db0dae818a4ddefd1560130","Muhamad Rizki Cahyadi","PK057","7","0","Senior Officer","5","6","14","64","5","1","2","");
INSERT INTO tabel_role VALUES("10070","PK059","f5264fb5dd9e7a5f0625ead4cf99748a","Bimo Firizki Diadi","PK059","7","0","Senior Officer","4","4","11","54","5","1","2","");
INSERT INTO tabel_role VALUES("10071","PK061","bbf6eb76300e11c07204fcb6b37c592f","Bayu Budi Utomo","PK061","7","0","Senior Officer","7","4","20","68","5","1","2","");
INSERT INTO tabel_role VALUES("10072","PK062","4af94e2228b66f54061c29cd57f1ef9e","Nur Asty Pratiwi","PK062","7","0","Senior Officer","4","4","11","50","5","1","2","");
INSERT INTO tabel_role VALUES("10073","PK063","aea7634c3ec2f35111a39f83e50b9d4b","Sholahuddin Triwidinata","PK063","7","0","Senior Officer","5","4","13","68","5","1","2","");
INSERT INTO tabel_role VALUES("10074","PK064","0310be8ba79e4380d9807fc0e56e7cc1","Bukry Chamma Siburian","PK064","7","0","Senior Officer","4","4","11","57","5","1","2","");
INSERT INTO tabel_role VALUES("10075","PK065","b67923e5a6170f34c52e19086ea1aeed","Rizki Ehsy Pangarso","PK065","7","0","Senior Officer","2","6","3","17","5","1","2","");
INSERT INTO tabel_role VALUES("10076","PK066","54a9676df022c0b88a9b43bba829add2","Latifah","PK066","7","0","Senior Officer","2","1","3","17","5","1","2","");
INSERT INTO tabel_role VALUES("10077","PK067","3046f57a2a27fdd1edece2fbb3c9ffae","Ramdani Adam","PK067","7","0","Senior Officer","10","7","68","82","5","1","2","");
INSERT INTO tabel_role VALUES("10081","PK072","6b62c56b6c78e81e262fc435b158f880","Mohamad Reza Pahlevi","PK072","7","0","Senior Officer","18","3","53","103","5","1","2","");
INSERT INTO tabel_role VALUES("10084","PK075","0f533944d5c73e05c49c8d4c4cca2196","Ario Seto","PK075","7","0","Senior Officer","15","3","44","70","5","1","2","");
INSERT INTO tabel_role VALUES("10089","PK080","c11a2864e145cb5f0ec4ae89b12e390f","Agus Triwahyudi","PK080","7","0","Senior Officer","5","4","15","68","5","1","2","");
INSERT INTO tabel_role VALUES("10090","PK083","2b1a48519736b7da7d581e9647443f09","Robi Nugraha","PK083","7","0","Senior Officer","10","7","32","85","5","1","2","");
INSERT INTO tabel_role VALUES("10098","PK086","f256f296f10bde8e132f22fd463862bd","Syamsul Fadly","PK086","7","0","Senior Officer","4","4","12","59","5","1","2","");
INSERT INTO tabel_role VALUES("10099","PK085","34b4f080b684b4105983b5c7d0ca04a0","Bayuaji Prabowo Nugroho","PK085","7","0","Senior Officer","5","4","14","73","5","1","2","");
INSERT INTO tabel_role VALUES("10102","10052","d6f8d124087ad4c23fe66b89b7893523","Arief Hartono","10052","7","0","Senior Officer","12","7","48","127","4","1","2","");
INSERT INTO tabel_role VALUES("10103","10054","bef4d169d8bddd17d68303877a3ea945","Yayang Supiyar","10054","7","0","Senior Officer","12","7","48","127","4","1","2","");
INSERT INTO tabel_role VALUES("10104","10053","7fbfc161a3b873bf2119c788ed93d1f4","Ujang","10053","7","0","Senior Officer","12","7","48","127","4","1","2","");
INSERT INTO tabel_role VALUES("10105","10055","e4191d610537305de1d294adb121b513","Rd Mochamad Erwin Siswanto","10055","7","0","Senior Officer","12","7","48","127","4","1","2","");
INSERT INTO tabel_role VALUES("10106","10056","7d74f0aa3521a78533a8e8d6a6b5b8a1","Deddy Khoirul Anam","10056","7","0","Senior Officer","17","7","49","180","4","1","2","");
INSERT INTO tabel_role VALUES("10107","10057","27bc42aaeb1540e87949a69ebeb4eb4c","Agus Winarto","10057","7","0","Senior Officer","25","7","73","197","4","1","2","");
INSERT INTO tabel_role VALUES("10108","10058","1c395dd594baa47728d72ffbc4258994","Mochamad Subechan","10058","7","0","Senior Officer","20","7","61","164","4","1","2","");
INSERT INTO tabel_role VALUES("10109","10059","e7ba053d8ba932b77348b3987ea0e40b","Adri Rachman","10059","7","0","Senior Officer","13","7","35","148","4","1","2","");
INSERT INTO tabel_role VALUES("10110","10060","e64928412aae022e2c27456df62dda09","Eko Hermansyah","10060","7","0","Senior Officer","13","7","35","17","4","1","2","");
INSERT INTO tabel_role VALUES("10111","10061","7fe3d16a83f683a0a7f1c029536bebe7","Suparjo","10061","7","0","Senior Officer","13","7","35","17","4","1","2","");
INSERT INTO tabel_role VALUES("10112","10062","f892447540d0e840049183faa3109b1b","Juwadi","10062","7","0","Senior Officer","6","7","17","17","4","1","2","");
INSERT INTO tabel_role VALUES("10113","10063","c9f2f917078bd2db12f23c3b413d9cba","Fitri Handayani","10063","7","0","Senior Officer","25","7","75","195","4","1","2","");
INSERT INTO tabel_role VALUES("10114","10064","41bacf567aefc61b3076c74d8925128f","Sukandana","10064","7","0","Senior Officer","15","7","44","164","4","1","2","");
INSERT INTO tabel_role VALUES("10115","10065","ffa4eb0e32349ae57f7a0ee8c7cd7c11","Suryo Subono","10065","7","0","Senior Officer","25","7","73","196","4","1","2","");
INSERT INTO tabel_role VALUES("10116","10066","955fd82131e15e7b5199cbc8f983306a","Abdul Moeis Boedijono","10066","7","0","Senior Officer","15","7","44","88","4","1","2","");
INSERT INTO tabel_role VALUES("10117","10067","792dd774336314c3c27a04bb260cf2cf","Jansen Jaya Rolas Hutagaol","10067","7","0","Senior Officer","13","7","37","88","4","1","2","");
INSERT INTO tabel_role VALUES("10118","10068","a4982cba8b4cbeb32a439f0367273fc8","Hery Muryanto","10068","7","0","Senior Officer","15","7","45","88","4","1","2","");
INSERT INTO tabel_role VALUES("10119","10069","530ad673015b98fcf4cdd5a68cb93d6c","Sigit Wahyu Ichtijar","10069","7","0","Senior Officer","13","7","37","88","4","1","2","");
INSERT INTO tabel_role VALUES("10120","10070","1aab7baa714e14868fe9eac65fcbd315","Mulyato","10070","7","0","Senior Officer","15","7","45","88","4","1","2","");
INSERT INTO tabel_role VALUES("10121","10071","4910fcdaedc2be5c5f05533b7a9cb8c2","M. Chairul Anam","10071","7","0","Senior Officer","14","7","40","88","4","1","2","");
INSERT INTO tabel_role VALUES("10122","10072","cc2b1ba0368ccd98d5bed7e2e97b4bb0","Teddy Arrisandi","10072","7","0","Senior Officer","15","7","44","92","4","1","2","");
INSERT INTO tabel_role VALUES("10123","10073","657e31ff3231b847d7604f6647a2dfc9","Aries Askandar","10073","7","0","Senior Officer","7","7","20","88","4","1","2","");
INSERT INTO tabel_role VALUES("10124","10074","95a2e3eab8bf82eef0459536d23be6a3","Muhammad Arsyad","10074","7","0","Senior Officer","14","7","38","88","4","1","2","");
INSERT INTO tabel_role VALUES("10125","10075","2e5050938e0df629a2f2c5ff24fe66c6","Dedy Sutikno","10075","7","0","Senior Officer","14","7","38","88","4","1","2","");
INSERT INTO tabel_role VALUES("10126","10076","11ed516444b2593eaba7f2c2bb63483e","Edwin Andry Sumala","10076","7","0","Senior Officer","7","7","23","88","4","1","2","");
INSERT INTO tabel_role VALUES("10127","10077","0e15048bf23f8cf2c4d71fe8d5272c15","Ismail","10077","7","0","Senior Officer","15","7","44","88","4","1","2","");
INSERT INTO tabel_role VALUES("10128","10078","2754518221cfbc8d25c13a06a4cb8421","Afri Tri Haryono","10078","7","0","Senior Officer","8","7","26","187","4","1","2","");
INSERT INTO tabel_role VALUES("10129","10079","273a8a2958ffca969e62c57ee568d522","Helmi Yunus","10079","7","0","Senior Officer","16","7","46","88","4","1","2","");
INSERT INTO tabel_role VALUES("10130","10080","ebd774c929a7f6c7e5df19e355f61e23","Andri Munandar","10080","7","0","Senior Officer","21","7","64","180","4","1","2","");
INSERT INTO tabel_role VALUES("10131","10081","725215ed82ab6306919b485b81ff9615","Sudarmadi","10081","7","0","Senior Officer","21","7","64","192","4","1","2","");
INSERT INTO tabel_role VALUES("10132","10082","9b22a40256b079f338827b0ff1f4792b","Prins Handoyo","10082","7","0","Senior Officer","21","7","64","88","4","1","2","");
INSERT INTO tabel_role VALUES("10133","10083","a46703c2f2e1c83edd4ffc41aa93a150","Bakti Sihombing","10083","7","0","Senior Officer","21","7","64","88","4","1","2","");
INSERT INTO tabel_role VALUES("10134","10084","b2df8d1dc5317b2b7951398ed39a00ac","Julpikar","10084","7","0","Senior Officer","21","7","64","88","4","1","2","");
INSERT INTO tabel_role VALUES("10135","10085","5e62c1998206e0110459a6143546fe2e","Rahmatul Aini","10085","7","0","Senior Officer","21","7","64","88","4","1","2","");
INSERT INTO tabel_role VALUES("10136","10086","6412121cbb2dc2cb9e460cfee7046be2","Supriadi","10086","7","0","Senior Officer","21","7","64","88","4","1","2","");
INSERT INTO tabel_role VALUES("10137","10087","afc2637129ad904485e07d2c0e6b0688","Rahmadi Panjaitan","10087","7","0","Senior Officer","21","7","64","88","4","1","2","");
INSERT INTO tabel_role VALUES("10138","10088","42edd1ec1dc5f5c1f11fd74a959e96c9","Aris Widodo","10088","7","0","Senior Officer","17","7","49","88","4","1","2","");
INSERT INTO tabel_role VALUES("10139","10089","e710549329cbc30d8cfa23cdd4b97f2f","Saiful","10089","7","0","Senior Officer","17","7","49","88","4","1","2","");
INSERT INTO tabel_role VALUES("10141","10091","b219f59c2dd596abfadbcecfc2277659","Iwan Dhani Gunawan","10091","7","0","Senior Officer","11","7","33","88","4","1","2","");
INSERT INTO tabel_role VALUES("10142","10092","c0c3a9fb8385d8e03a46adadde9af3bf","Budi Lukman","10092","7","0","Senior Officer","11","7","33","88","4","1","2","");
INSERT INTO tabel_role VALUES("10143","10093","bffbc93c08bb822842c8991709fc7714","Dedi Kusnadi","10093","7","0","Senior Officer","11","7","33","88","4","1","2","");
INSERT INTO tabel_role VALUES("10144","10094","018a1b6ccd2ec81361657e259155895a","Deni Catur Wardani","10094","7","0","Senior Officer","11","7","33","88","4","1","2","");
INSERT INTO tabel_role VALUES("10145","10095","253d812cbfbb77c03b910f9897e9487d","Asep Sugiri","10095","7","0","Senior Officer","11","7","33","88","4","1","2","");
INSERT INTO tabel_role VALUES("10146","10096","ee4117572afbc0cf760f70714af0ec52","Boni Pasius Silalahi","10096","7","0","Senior Officer","11","7","33","88","4","1","2","");
INSERT INTO tabel_role VALUES("10147","10097","23b702c4c421ddb2d023fee968c0d839","Dadan Kusnidar","10097","7","0","Senior Officer","11","7","34","88","4","1","2","");
INSERT INTO tabel_role VALUES("10148","10098","c876914f82ce54cb533b186afd41166e","Aa Dedih","10098","7","0","Senior Officer","11","7","34","88","4","1","2","");
INSERT INTO tabel_role VALUES("10156","PK092","c6f3b2844dbaf9894dd271601421d43c","Arief Rachman Eka Putra","PK092","7","0","Senior Officer","14","5","38","68","5","1","2","");
INSERT INTO tabel_role VALUES("10158","PK094","7a2fe59579b1a0becdcaab873d563560","Een Ahmadan Yoga Wilanda","PK094","7","0","Senior Officer","5","6","14","64","5","1","2","");
INSERT INTO tabel_role VALUES("10162","PK099","27345d25923b27b503c6bc82a4232684","Rizqa Amalia","PK099","7","0","Senior Officer","5","6","15","63","5","1","2","");
INSERT INTO tabel_role VALUES("10165","PK104","167abe53c7adf82af922c36296c1f889","M. Syaiful Rifqi adi Khrisna","PK104","7","0","Senior Officer","5","4","15","70","5","1","2","");
INSERT INTO tabel_role VALUES("10166","PK105","5c922c1bf3889a3683229da959290436","Salma Jounarasti Hasniza","PK105","7","0","Senior Officer","3","1","7","36","5","1","2","");
INSERT INTO tabel_role VALUES("10169","PK058","624717d9f15d1bf3e5f94d27a1a515b1","Anang Daus Soemartri","PK058","7","0","Senior Officer","3","5","9","43","5","1","2","");
INSERT INTO tabel_role VALUES("10170","PK091","e3dd589db435b6414ce32434460cc359","Fauzi Rachman Juang Pribadi","PK091","7","0","Senior Officer","5","4","15","69","5","1","2","");
INSERT INTO tabel_role VALUES("10171","PK103","28d3c0d6aeecdd362803440626770f52","Muhammad Nofi Risdianto","PK103","7","0","Senior Officer","5","1","13","68","5","1","2","");
INSERT INTO tabel_role VALUES("10186","PK109","e01de93068ff77e671502e4580f87011","Elisa Soedarto","PK109","7","0","Senior Officer","18","3","53","103","5","1","2","");
INSERT INTO tabel_role VALUES("10032","PK018","e8e68213a17dbac1bc8736e68af7732c","Mia Restu Oktavia Sutanty","PK018","8","0","Officer","12","7","48","129","5","1","2","");
INSERT INTO tabel_role VALUES("10033","PK019","cd86235826c87663d03da08dda19b5af","Rafika Afrianne Ichsan","PK019","8","0","Officer","12","7","48","128","5","1","2","");
INSERT INTO tabel_role VALUES("10036","PK022","0ac70a7ae64fce4225dcca0debaf939a","Julian Dwi Kusuma Lestari","PK022","8","0","Officer","12","7","48","132","5","1","2","");
INSERT INTO tabel_role VALUES("10038","PK024","59332b589a064382226ec34492419cba","Riyen Haryani","PK024","8","0","Officer","2","6","3","30","5","1","2","");
INSERT INTO tabel_role VALUES("10039","PK025","29bff3632b1337102fd98773e64bfc36","Risma Nurjannah","PK025","8","0","Officer","19","7","55","116","5","1","2","");
INSERT INTO tabel_role VALUES("10041","PK028","bfb3852b4814d2e61598f2ad07d46298","Kevin Dwiagy Emerald","PK028","8","0","Officer","19","2","57","124","5","1","2","");
INSERT INTO tabel_role VALUES("10043","PK030","73b4c1b7b7ddaf5ae9850b114b6bf558","Resy Alifiyanti Suprapto","PK030","8","0","Officer","5","2","14","116","5","1","2","");
INSERT INTO tabel_role VALUES("10046","PK033","14c96390890cda796ba8a0100f647a4f","Saipul Anwar","PK033","8","0","Officer","11","5","33","91","5","1","2","");
INSERT INTO tabel_role VALUES("10047","PK034","1872f655b7c18c6774a606268f9e8397","Muhamad Nur Baedi","PK034","8","0","Officer","12","7","48","130","5","1","2","");
INSERT INTO tabel_role VALUES("10049","PK036","7cc3666509e65e7209d2517003c984d9","Siti Rosmayanti","PK036","8","0","Officer","2","6","3","29","5","1","2","");
INSERT INTO tabel_role VALUES("10050","PK037","5eb0614e5a420717938116ce87e358fd","Maylisa Marsita Anggreina Siahaya","PK037","8","0","Officer","2","6","3","20","5","1","2","");
INSERT INTO tabel_role VALUES("10052","PK039","679247a792c1a50731ba8f48425e58ed","Eko Prabowo","PK039","8","0","Officer","7","5","20","72","5","1","2","");
INSERT INTO tabel_role VALUES("10067","PK055","69d932de20a7f913c654a9e87a1e814d","Ayu Ratnasari","PK055","8","0","Officer","5","5","14","66","5","1","2","");
INSERT INTO tabel_role VALUES("10068","PK056","39622b96050721a046d2b04977b2e9b7","Dicky Wahyu Pratama","PK056","8","0","Officer","11","7","33","89","5","1","2","");
INSERT INTO tabel_role VALUES("10079","PK070","dc8734f7a1b8c973d64b78ca4d0b1121","Wega Tommy Dwi Pamungkas","PK070","8","0","Officer","15","7","44","72","5","1","2","");
INSERT INTO tabel_role VALUES("10080","PK071","ab47cbbc8714426e14ac62e2b8a8e81d","Nur Fitriyah Febriana","PK071","8","0","Officer","5","6","14","65","5","1","2","");
INSERT INTO tabel_role VALUES("10085","PK076","856adc13bd0c5999ed10315e300e76e3","Andi Afriansyah","PK076","8","0","Officer","10","7","30","78","5","1","2","");
INSERT INTO tabel_role VALUES("10091","PK084","3cfab66abaf1adf0e948a6e53c599410","Tania Intan Sari","PK084","8","0","Officer","4","4","10","47","5","1","2","");
INSERT INTO tabel_role VALUES("10097","PK087","a3fb120d1e9c2d67aabe358cf47eb1df","Muhammad Rizaq Nuriz Zaman","PK087","8","0","Officer","7","5","20","157","5","1","2","");
INSERT INTO tabel_role VALUES("10100","PK095","ed3230f53e8c255c8d2a29c3e04a559f","Sabila Adinda Puri Andarini","PK095","8","0","Officer","19","2","55","115","5","1","2","");
INSERT INTO tabel_role VALUES("10140","10090","4392e631da381761421d5e1e0c3de25f","Hery Wahyu Noertjahyo","10090","8","0","Officer","17","7","49","91","4","1","2","");
INSERT INTO tabel_role VALUES("10155","PK090","71123e6a0057aaca15f4d9ef40d51f1d","Sofyan Wahyudi","PK090","8","0","Officer","5","6","14","64","5","1","2","");
INSERT INTO tabel_role VALUES("10160","PK097","fd788805739e13e3a728781093a5af22","Inggrid Vio Fernanda","PK097","8","0","Officer","5","5","13","64","5","1","2","");
INSERT INTO tabel_role VALUES("10163","PK100","228b37d4d7094a73064949d8b1837970","Nur Agus Rachmawan","PK100","8","0","Officer","5","5","13","64","5","1","2","");
INSERT INTO tabel_role VALUES("10164","PK101","95b3549132183db7c1d54f0c9257cbfd","Swanti","PK101","8","0","Officer","5","6","15","64","5","1","2","");
INSERT INTO tabel_role VALUES("10167","PK106","29a4d75a5d500aa76dbae56082a17c76","Yuni Nurmaya","PK106","8","0","Officer","5","6","13","65","5","1","2","");
INSERT INTO tabel_role VALUES("10168","PK107","6234e45cf0a69c9846ccf2df739b89db","Hasan Mauludi","PK107","8","0","Officer","5","5","13","65","4","1","2","");
INSERT INTO tabel_role VALUES("10185","PK108","7a0a87077cb3c4edd20ce4ae4d5ccc85","Yahya Ahmadi","PK108","8","0","Officer","2","6","3","9","5","1","2","");
INSERT INTO tabel_role VALUES("10152","K0005","a29e39366bc75d66b57f8e2536fe9312","Donny Arsal","K0005","10","0","Komisaris","0","1","0","1","1","1","1","");



DROP TABLE tabel_surat;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_surat` AS select `tbl_surat_masuk`.`id_surat` AS `id_surat`,`tbl_surat_masuk`.`no_agenda` AS `no_agenda`,`tbl_surat_masuk`.`asal_surat` AS `asal_surat`,`tbl_surat_masuk`.`isi` AS `isi`,`tbl_surat_masuk`.`tgl_surat` AS `tgl_surat`,`tbl_surat_masuk`.`tgl_diterima` AS `tgl_diterima`,`tbl_surat_masuk`.`file` AS `file`,`tbl_surat_masuk`.`keterangan` AS `keterangan`,`tbl_user`.`nama` AS `nama`,`tbl_surat_masuk`.`id_user` AS `id_user`,`tbl_surat_masuk`.`tujuan` AS `tujuan`,`tbl_user`.`nip` AS `nip`,`tbl_role`.`role` AS `role`,`tbl_surat_masuk`.`baca` AS `baca`,`tbl_surat_masuk`.`kode` AS `kode`,`tbl_surat_masuk`.`status` AS `status` from ((`tbl_surat_masuk` join `tbl_user` on((`tbl_surat_masuk`.`id_user` = `tbl_user`.`id_user`))) join `tbl_role` on((`tbl_user`.`admin` = `tbl_role`.`admin`)));




DROP TABLE tabel_surat_keluar;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_surat_keluar` AS select `tbl_surat_keluar`.`id_surat` AS `id_surat`,`tbl_surat_keluar`.`no_agenda` AS `no_agenda`,`tbl_surat_keluar`.`tujuan` AS `tujuan`,`tbl_surat_keluar`.`no_surat` AS `no_surat`,`tbl_surat_keluar`.`isi` AS `isi`,`tbl_surat_keluar`.`kode` AS `kode`,`tbl_surat_keluar`.`tgl_surat` AS `tgl_surat`,`tbl_surat_keluar`.`tgl_catat` AS `tgl_catat`,`tbl_surat_keluar`.`file` AS `file`,`tbl_surat_keluar`.`keterangan` AS `keterangan`,`tbl_surat_keluar`.`id_user` AS `id_user`,`tbl_user`.`nama` AS `nama`,`tbl_role`.`admin` AS `admin`,`tbl_surat_keluar`.`dari` AS `dari`,`tbl_surat_keluar`.`status` AS `status` from ((`tbl_surat_keluar` join `tbl_user` on((`tbl_surat_keluar`.`id_user` = `tbl_user`.`id_user`))) join `tbl_role` on((`tbl_user`.`admin` = `tbl_role`.`admin`)));




DROP TABLE tbl_akses_user;

CREATE TABLE `tbl_akses_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(2) NOT NULL,
  `maintenance` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_akses_user VALUES("1","0","0");



DROP TABLE tbl_berita;

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `berita` varchar(255) NOT NULL,
  `tgl_akhir` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_berita VALUES("1","UKB akan dilaksanakan pada tanggal 26 November 2018 - 29 November 2018","2018-11-29");
INSERT INTO tbl_berita VALUES("2","Aplikasi Tenancy Management Masih dalam Pembangunan","2018-12-01");
INSERT INTO tbl_berita VALUES("3","Pengisian Data Karyawan akan berakhir pada hari Jum\'at 14 Desember 2018 Pukul 23.59 WIB","2018-12-14");
INSERT INTO tbl_berita VALUES("4","Pengisian Data Karyawan akan berakhir pada hari Jum\'at 14 Desember 2018 Pukul 23.59 WIB","2018-12-15");



DROP TABLE tbl_bulan_gaji;

CREATE TABLE `tbl_bulan_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` date NOT NULL,
  `status` int(25) NOT NULL,
  `status_proses` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tbl_bulan_gaji VALUES("2","2019-01-18","0","0");



DROP TABLE tbl_cuti;

CREATE TABLE `tbl_cuti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `divisi` int(25) NOT NULL,
  `status_sdm` int(2) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tbl_cuti VALUES("1","8","dd","2019-01-07","2019-01-08","1","1","Super Admin","2","1","");
INSERT INTO tbl_cuti VALUES("3","6","dd","2019-01-17","2019-01-18","1","1","Sumarsono","2","1","");
INSERT INTO tbl_cuti VALUES("10","10150","dd","2019-01-24","2019-01-24","1","1","Tita Paulina Purbasari","1","1","");
INSERT INTO tbl_cuti VALUES("11","4","d","2019-01-17","2019-01-18","0","0","Dendito Pratama","2","0","");
INSERT INTO tbl_cuti VALUES("12","4","ss","2019-01-24","2019-01-25","0","0","Dendito Pratama","2","0","");



DROP TABLE tbl_department;

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `kode_unit` int(25) DEFAULT NULL,
  `kode` int(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_unit` (`kode_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO tbl_department VALUES("23","KOMISARIS","0","0");
INSERT INTO tbl_department VALUES("24","DIREKSI","1","0");
INSERT INTO tbl_department VALUES("25","DEPARTEMEN MARKETING & SALES","2","0");
INSERT INTO tbl_department VALUES("26","DEPARTEMEN BUSINESS DEVELOPMENT","3","0");
INSERT INTO tbl_department VALUES("27","DEPARTEMEN ENGINEERING","4","0");
INSERT INTO tbl_department VALUES("28","PROJECT PROPERTY","5","0");
INSERT INTO tbl_department VALUES("29","RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)","6","0");
INSERT INTO tbl_department VALUES("30","RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","0");
INSERT INTO tbl_department VALUES("31","RUAS PROYEK JASAMARGA KERTOSONO NGAWI (JKN)","8","0");
INSERT INTO tbl_department VALUES("32","RUAS PROYEK JASAMARGA GEMPOL PASURUAN (JGP)","9","0");
INSERT INTO tbl_department VALUES("33","DEPARTEMEN RELATED BUSINESS OPERATION","10","0");
INSERT INTO tbl_department VALUES("34","REST AREA PURBALEUNYI","11","0");
INSERT INTO tbl_department VALUES("35","REST AREA PALIKANCI","12","0");
INSERT INTO tbl_department VALUES("36","REST AREA JASAMARGA SEMARANG BATANG (JSB)","13","0");
INSERT INTO tbl_department VALUES("37","REST AREA JASAMARGA SOLO NGAWI (JSN)","14","0");
INSERT INTO tbl_department VALUES("38","REST AREA JASAMARGA KERTOSONO NGAWI (JKN)","15","0");
INSERT INTO tbl_department VALUES("39","REST AREA JASAMARGA GEMPOL PASURUAN (JGP)","16","0");
INSERT INTO tbl_department VALUES("40","REST AREA JASAMARGA SURABAYA MOJOKERTO (JSM)","17","0");
INSERT INTO tbl_department VALUES("41","DEPARTEMEN FINANCE & ACCOUNTING","18","0");
INSERT INTO tbl_department VALUES("42","DEPARTEMEN HR & GENERAL AFFAIR","19","0");
INSERT INTO tbl_department VALUES("45","REST AREA JASAMARGA PANDAAN MALANG (JPM)","20","0");
INSERT INTO tbl_department VALUES("46","REST AREA JASAMARGA MEDAN KUALANAMU (JMK)","21","0");
INSERT INTO tbl_department VALUES("47","REST AREA JASAMARGA BALIKPAPAN SAMARINDA","22","0");
INSERT INTO tbl_department VALUES("48","REST AREA JASAMARGA MANADO BITUNG","23","0");
INSERT INTO tbl_department VALUES("49","DEPARTEMEN UTILITAS DAN IKLAN","24","0");
INSERT INTO tbl_department VALUES("50","REGIONAL TIP / TI","25","0");
INSERT INTO tbl_department VALUES("51","DEPARTEMEN ENGINEERING RELATED BUSINESS","26","0");
INSERT INTO tbl_department VALUES("52","DEPARTEMEN KEUANGAN DAN SDMU RELATED BUSINESS","27","0");



DROP TABLE tbl_disposisi;

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `isi_disposisi` mediumtext NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `id_surat` int(10) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `baca` int(2) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id_disposisi`),
  UNIQUE KEY `id_user_tujuan` (`id_disposisi`),
  KEY `fasf` (`nama`),
  CONSTRAINT `fasf` FOREIGN KEY (`nama`) REFERENCES `tbl_user` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_file_sharing;

CREATE TABLE `tbl_file_sharing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `file` text NOT NULL,
  `divisi` int(25) NOT NULL,
  `sharing` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_gaji;

CREATE TABLE `tbl_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gaji_jm` int(255) NOT NULL,
  `pen_jamsostek` int(255) NOT NULL,
  `bpjstk_jampes` int(255) NOT NULL,
  `bpjstk_jamkes` int(255) NOT NULL,
  `tun_pph21_tetap` int(255) NOT NULL,
  `tun_pph21_tidak` int(255) NOT NULL,
  `pot_jamsostek_kar` int(255) NOT NULL,
  `pot_bpjstk_jampes` int(255) NOT NULL,
  `pot_bpjstk_jamkes` int(255) NOT NULL,
  `pot_pph21_tetap` int(255) NOT NULL,
  `pot_pph21_tidak` int(255) NOT NULL,
  `status` int(2) NOT NULL,
  `bpjs_nol` int(25) NOT NULL,
  `koreksi_pph21` int(255) NOT NULL,
  `total_penerimaan` int(255) NOT NULL,
  `total_potongan` int(255) NOT NULL,
  `penerimaan_bersih` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=359 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gaji VALUES("180","2","2","","0","263320","116000","232000","83724","0","379320","174000","290000","83515","0","1","0","0","6495044","926835","5568209");
INSERT INTO tbl_gaji VALUES("181","2","4","","0","263320","116000","232000","83724","0","379320","174000","290000","83515","0","1","0","0","6495044","1152018","5343026");
INSERT INTO tbl_gaji VALUES("182","2","6","","0","927309","161880","320000","1699661","0","1335816","242820","400000","1699661","0","1","0","0","20608850","3678297","16930554");
INSERT INTO tbl_gaji VALUES("183","2","7","","0","794500","161880","320000","1874753","0","0","242820","400000","1874753","0","1","0","0","20651133","2517573","18133560");
INSERT INTO tbl_gaji VALUES("184","2","9","","0","522100","161880","320000","635506","0","0","242820","400000","635506","0","1","0","0","13139486","1278326","11861160");
INSERT INTO tbl_gaji VALUES("185","2","10","","0","0","0","0","0","0","0","0","0","0","0","1","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("186","2","10001","","0","522100","161880","320000","635506","0","0","242820","400000","635506","0","1","0","0","13139486","1278326","11861160");
INSERT INTO tbl_gaji VALUES("187","2","10002","","0","522100","161880","320000","635506","0","22249","242820","400000","635506","0","1","0","0","13139486","1300575","11838911");
INSERT INTO tbl_gaji VALUES("188","2","10003","","0","794500","161880","320000","1940930","0","0","242820","400000","1940930","0","1","0","0","20717310","2583750","18133560");
INSERT INTO tbl_gaji VALUES("189","2","10004","","0","522100","161880","320000","834036","0","0","242820","400000","834036","0","1","0","0","13338016","1476856","11861160");
INSERT INTO tbl_gaji VALUES("190","2","10005","","0","522100","161880","320000","635506","0","0","242820","400000","635506","0","1","0","0","13139486","1278326","11861160");
INSERT INTO tbl_gaji VALUES("191","2","10007","","0","522100","161880","320000","834036","0","0","242820","400000","834036","0","1","0","0","13338016","1476856","11861160");
INSERT INTO tbl_gaji VALUES("192","2","10008","","0","794500","161880","320000","1742400","0","0","242820","400000","1742400","0","1","0","0","20518780","2385220","18133560");
INSERT INTO tbl_gaji VALUES("193","2","10009","","0","385900","161880","320000","152600","0","0","242820","400000","152218","0","0","0","0","9520380","795038","8725341");
INSERT INTO tbl_gaji VALUES("194","2","10010","","0","794500","0","320000","1713833","0","0","0","400000","1713833","0","0","0","0","20328333","2113833","18214500");
INSERT INTO tbl_gaji VALUES("195","2","10011","","0","522100","161880","320000","834036","0","0","242820","400000","834036","0","0","0","0","13338016","1476856","11861160");
INSERT INTO tbl_gaji VALUES("196","2","10012","","0","927309","161880","0","849073","0","1335816","242820","0","849073","0","0","0","0","13438262","2427708","11010554");
INSERT INTO tbl_gaji VALUES("197","2","10013","","0","385900","161880","320000","152600","0","0","242820","400000","152218","0","0","0","0","9520380","795038","8725341");
INSERT INTO tbl_gaji VALUES("198","2","10014","","0","522100","161880","320000","635506","0","0","242820","400000","635506","0","0","0","0","13139486","1278326","11861160");
INSERT INTO tbl_gaji VALUES("199","2","10015","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("200","2","10016","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("201","2","10017","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("202","2","10018","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("203","2","10019","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("204","2","10020","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("205","2","10021","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("206","2","10022","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("207","2","10023","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("208","2","10024","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("209","2","10025","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("210","2","10027","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("211","2","10031","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("212","2","10032","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("213","2","10033","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("214","2","10034","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("215","2","10035","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("216","2","10036","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("217","2","10037","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("218","2","10038","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("219","2","10039","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("220","2","10040","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("221","2","10041","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("222","2","10042","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("223","2","10043","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("224","2","10044","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("225","2","10045","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("226","2","10046","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("227","2","10047","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("228","2","10048","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("229","2","10049","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("230","2","10050","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("231","2","10051","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("232","2","10052","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("233","2","10053","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("234","2","10055","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("235","2","10056","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("236","2","10057","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("237","2","10058","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("238","2","10059","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("239","2","10060","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("240","2","10061","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("241","2","10062","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("242","2","10063","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("243","2","10064","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("244","2","10065","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("245","2","10067","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("246","2","10068","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("247","2","10069","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("248","2","10070","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("249","2","10071","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("250","2","10072","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("251","2","10073","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("252","2","10074","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("253","2","10075","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("254","2","10076","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("255","2","10077","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("256","2","10079","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("257","2","10080","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("258","2","10081","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("259","2","10082","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("260","2","10083","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("261","2","10084","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("262","2","10085","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("263","2","10086","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("264","2","10087","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("265","2","10088","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("266","2","10089","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("267","2","10090","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("268","2","10091","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("269","2","10092","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("270","2","10093","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("271","2","10094","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("272","2","10095","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("273","2","10096","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("274","2","10097","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("275","2","10098","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("276","2","10099","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("277","2","10100","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("278","2","10101","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("279","2","10102","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("280","2","10103","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("281","2","10104","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("282","2","10105","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("283","2","10106","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("284","2","10107","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("285","2","10108","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("286","2","10109","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("287","2","10110","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("288","2","10111","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("289","2","10112","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("290","2","10113","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("291","2","10114","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("292","2","10115","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("293","2","10116","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("294","2","10117","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("295","2","10118","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("296","2","10119","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("297","2","10120","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("298","2","10121","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("299","2","10122","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("300","2","10123","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("301","2","10124","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("302","2","10125","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("303","2","10126","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("304","2","10127","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("305","2","10128","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("306","2","10129","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("307","2","10130","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("308","2","10131","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("309","2","10132","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("310","2","10133","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("311","2","10134","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("312","2","10135","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("313","2","10136","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("314","2","10137","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("315","2","10138","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("316","2","10139","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("317","2","10140","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("318","2","10141","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("319","2","10142","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("320","2","10143","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("321","2","10144","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("322","2","10145","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("323","2","10146","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("324","2","10147","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("325","2","10148","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("326","2","10149","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("327","2","10150","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("328","2","10151","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("329","2","10152","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("330","2","10153","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("331","2","10154","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("332","2","10155","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("333","2","10156","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("334","2","10157","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("335","2","10158","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("336","2","10159","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("337","2","10160","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("338","2","10161","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("339","2","10162","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("340","2","10163","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("341","2","10164","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("342","2","10165","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("343","2","10166","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("344","2","10167","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("345","2","10168","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("346","2","10169","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("347","2","10170","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("348","2","10171","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("349","2","10172","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("350","2","10180","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("351","2","10181","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("352","2","10182","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("353","2","10183","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("354","2","10184","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("355","2","10185","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("356","2","10186","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("357","2","10187","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("358","2","10188","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");



DROP TABLE tbl_gaji_pokok;

CREATE TABLE `tbl_gaji_pokok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_jabatan` int(25) NOT NULL,
  `gaji` int(255) NOT NULL,
  `status_karyawan` int(25) NOT NULL,
  `status_tugas` int(2) NOT NULL,
  `t_jabatan` int(255) NOT NULL,
  `t_fungsional` int(255) NOT NULL,
  `t_transportasi` int(255) NOT NULL,
  `t_utilitas` int(255) NOT NULL,
  `t_perumahan` int(255) NOT NULL,
  `t_komunikasi` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gaji_pokok VALUES("1","1","22277700","1","1","0","0","2000000","0","0","2000000");
INSERT INTO tbl_gaji_pokok VALUES("2","2","49506000","2","2","10300000","0","0","0","10000000","1500000");
INSERT INTO tbl_gaji_pokok VALUES("3","3","42080100","2","1","9270000","0","0","0","10000000","1500000");
INSERT INTO tbl_gaji_pokok VALUES("4","4","12500000","3","1","5000000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("5","6","9000000","3","1","2500000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("6","6","8500000","5","2","2500000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("7","8","7000000","3","1","0","1500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("8","8","6500000","5","2","0","1500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("9","9","5300000","4","2","0","500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("10","9","5300000","5","2","0","500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("11","10","4300000","5","2","0","350000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("12","6","9000000","4","2","2500000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("15","7","9000000","3","1","2000000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("16","7","9000000","4","2","2000000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("17","3","42080100","2","2","9270000","0","0","0","10000000","1500000");
INSERT INTO tbl_gaji_pokok VALUES("18","3","42080100","3","1","9270000","0","0","0","10000000","1500000");



DROP TABLE tbl_handle;

CREATE TABLE `tbl_handle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuti` int(255) NOT NULL,
  `menit_telat` int(255) NOT NULL,
  `tarif_manager` int(255) NOT NULL,
  `jam_bulan` int(255) NOT NULL,
  `menit_kerja` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_handle VALUES("1","12","10380","100000","173","480");



DROP TABLE tbl_handle_backup;

CREATE TABLE `tbl_handle_backup` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `statback` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_handle_backup VALUES("1","0");



DROP TABLE tbl_hukuman;

CREATE TABLE `tbl_hukuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `jenis_hukuman` varchar(255) NOT NULL,
  `uraianhukuman` varchar(255) NOT NULL,
  `tanggalawal` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_identitas;

CREATE TABLE `tbl_identitas` (
  `id_identitas` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `tgl_bakti` date NOT NULL,
  `grade` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_keluarga` varchar(255) NOT NULL,
  `agama` varchar(1) NOT NULL,
  `goldarah` varchar(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `propinsi` varchar(255) NOT NULL,
  `kode_pos` int(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `KTP` varchar(255) NOT NULL,
  `KK` varchar(255) NOT NULL,
  `NPWP` varchar(255) NOT NULL,
  `BPJSKT` varchar(255) NOT NULL,
  `BPJSKS` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_npwp` varchar(255) NOT NULL,
  `no_bpjsks` varchar(255) NOT NULL,
  `no_bpjskt` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `jenis_bank` varchar(255) NOT NULL,
  `bpjs_jampes_nol` int(25) NOT NULL,
  `bpjs_jamkes_nol` int(25) NOT NULL,
  `gaji_jm` int(255) NOT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;

INSERT INTO tbl_identitas VALUES("5","10012","2017-07-14","","P","Nganjuk","1965-08-30","25","1","O","Jl. Bawang III No. 70 RT.04 RW.03","Cibodasari","Cibodas","Tangerang","Banten","0","021-5511093","","4902-bopak.jpg","5846-Abot.jpg","597-Acas.jpg","5496-anang.jpg","2081-Akoeng.jpg","123124124","477980536402000","86J82012724","86J82012724","1290006068916","Sumarmi","1","0","1","20425317");
INSERT INTO tbl_identitas VALUES("6","4","2018-03-05","","L","Bandung","1996-01-15","33","1","AB","Jl. Pesantren no. F-7 RT09 RW008","Cibabat","Cimahi Utara","Cimahi","Jawa Barat","40513","082262442703","","","","","","","3277031501960018","841836943421000","0001875571997","","9000015198055","Dendito Pratama Karmandia","1","0","0","0");
INSERT INTO tbl_identitas VALUES("7","6","2017-03-10","","L","","1968-09-19","25","1","A"," JL.KRAKATAU IV D21/14 RT08/05 ","PONDOK MELATI ","JATIWARNA"," BEKASI ","JAWA BARAT","0","","","","","","","","","478008121444000","","91J82012476","1290004420580","SUMARSONO","1","0","0","20425317");
INSERT INTO tbl_identitas VALUES("8","10008","2016-12-01","","L","Medan","1975-05-22","24","1","A","KOMPLEK BINA MARGA NO.2 RT.001/05","KEL. CIPAYUNG","KEC. CIPAYUNG","JAKARTA TIMUR","JAKARTA","0","081267006800","","3229-angga.jpg","7578-ardiansyah.jpg","","","","3175102205750005","674580436015000","","04J80183678","1290010522536","DONY IKHWAN","1","0","0","0");
INSERT INTO tbl_identitas VALUES("9","10006","0000-00-00","","P","","0000-00-00","22","1","A","Asd","","","","","0","","","","","","","","","dd","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("10","2","2018-03-01","","P","Jakarta","1980-04-13","11","1","B","Jl. Karang Tengah Raya 13 RT006 RW004","Lebak Bulus","Cilandak","Jakarta Selatan","Jakarta","12440","","","4437-KTP.jpg","8793-KK.jpg","5855-NPWP.jpg","3036-kartu_peserta_JJ084645.pdf","8281-BPJS Kesehatan.pdf","3174065304800002","581080975016000","0001651803941","18022465563","1010009711514","Aprilia Hermansyah","1","0","0","0");
INSERT INTO tbl_identitas VALUES("11","10013","2018-01-02","","L","Sleman","1976-06-24","25","3","B","Villa Mitiara Serpong Blok D2 No. 54","Pondok Jagung Timur","Serpong Utara","Tangerang Selatan","Banten","15325","","","","","","","","3674022406760010","689477818411000","","94J82324297","1640000462897","EDMUNDUS EDY PANCANINGTYAS","1","0","0","0");
INSERT INTO tbl_identitas VALUES("12","10093","2018-07-01","","L","Jakarta","1969-09-08","25","1","A","RT 03 RW 11 No. 38A","Jatiwaringin","Pondok Gede","Bekasi","Jawa Barat","17411","085697180073, 0221","","9532-03_2018Penugasan Karyawan-budi.docx","","","","","3275080809690030","142073774407000","88J82012498","88J82012498","9000025219792","Slamet Purwanto","1","0","0","0");
INSERT INTO tbl_identitas VALUES("13","10027","2016-09-13","","L","Jakarta","1989-02-16","23","1","A","KOMP.CHANDRA INDAH BLOK C-48 RT. 001/015","KEL.JATIRAHAYU","KEC.PONDOK MELATI","BEKASI","JAWA BARAT","0","081296999697","","","","","","","3275121602890002","442007456432.000","","3275121602890002","1240005837886","HERDWIN NOFRIAN","1","0","0","0");
INSERT INTO tbl_identitas VALUES("14","10010","2017-03-10","","L","Jakarta","1987-09-09","24","1","A","Pondok Pekayon Indah Blok DD 15/25","Pekayon Jaya","Bekasi Selatan","Bekasi ","Jawa Barat","0","081315947070","","","","","","","3275080909870007","590974945432000","","10021654800","0060004531327","IMAD ZAKY MUBARAK","1","1","0","0");
INSERT INTO tbl_identitas VALUES("15","7","2013-02-25","","L","Gresik","1987-05-23","23","1","O","Jl. Venus Timur VII No. 17 RT. 02/01","Kel. Manjah Lega","Kec. Ranca Sari","Bandung","Jawa Barat","40286","022.7562026","","","","","","","3273232305870002","794874487429000","","09022867106","1300010168337","Hubby Ramdhani","1","0","0","0");
INSERT INTO tbl_identitas VALUES("17","10025","2015-06-12","","L","PEKANBARU","1970-09-26","24","1","A","J. DARMAWANGSA X/24  RT. 002/001","KEL. CIPETE UTARA","KEC. KEBAYORAN BARU ","JAKARTA SELATAN","JAKARTA","0","","","","","","","","3174072609700003","067800607019000","","15036665725","1560007351564","IRWAN ARTIGYO SUMADIYO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("18","10063","2016-03-04","","L","TASIK MALAYA","1982-01-17","24","1","A","JL.RAYA PASAR MINGGU, Gg.SOSIAL NO.26 RT.011/001","KEL.PASAR MINGGU","KEC. PASAR MINGGU","JAKARTA SELATAN","JAKARTA","0","","","","","","","","3276021701820001","761687433017000","","13035229692","1240007135925","RIZALULLOH","1","0","0","0");
INSERT INTO tbl_identitas VALUES("19","10015","2018-01-09","","P","Jakarta","1968-04-27","25","1","A","Jl. Kemanggisan Pulo RT003 RW017","Palmerah","Palmerah","JAkarta Barat","Jakarta","0","","","","","","","","","472116144031000","0001629136045","98J82035076","1290010688832","KATNI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("20","10040","2016-07-11","","P","Jakarta","1992-09-19","22","1","A","Pondok Mitra Lestari C9 NO. 16 RT.10/13 ","Kel. Jati Rasa","Kec. Jati Asih","Bekasi","Jawa Barat","17424","081908170390","","","","","","","3275095909920007","710290065432000","0001369774629","14021840526","1670000095645","GATRI AYUNING LESTARI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("21","10037","2016-05-01","","L","JAKARTA","1987-12-29","33","1","O","KOMP. AD. BULAK RANTAI G. 39 RT. 003/005","KEL. TENGAH","KEC. KRAMAT JATI","JAKARTA TIMUR","JAKARTA","0","081383639999","","3812-KTP.jpg","","175-NPWP.jpg","","","3175042912870004","728125337009000","","16029287683","1290009921723","WIDYADJI SASONO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("22","10026","0000-00-00","","L","","0000-00-00","23","1","A","dsa","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("23","10081","2018-04-03","","L","Jakarta","1987-12-13","24","1","O","Jl. Sagu no. 41 RT006 RW005","Jagakarsa","Jagakarsa","Jakarta Selatan","Jakarta","12620","085781000817","","","","","","","3174041312870012","872083258017000","17034241459","17034241459","1270009788959","MOHAMAD REZA PAHLEVI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("24","10082","2016-11-01","","L","JAKARTA","1970-05-26","24","1","O","JL.PERDATAM VII NO.3 RT.010/005","KEL.ULUJAMI","KEC.PESANGGRAHAN","Jakarta Selatan","Jakarta","12250","","","","","","","","3174072605700001","170535215012000","","","1030006291765","VISHNU DAMAR SASONGKO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("25","10003","2016-04-11","","P","Yogyakarta","1985-05-18","22","1","A","JL. H. MANDOR II CILANDAK RT. 016/002","KEL. CILANDAK BARAT","KEC. CILANDAK","JAKARTA SELATAN","JAKARTA","11","082112222050","","","","","","","3174065805850005","876198326016000","","120237877860","1160006041603","META HERLINA PUSPITANINGTYAS","1","0","0","0");
INSERT INTO tbl_identitas VALUES("26","9","2013-03-01","","L","TANGERANG","1964-12-31","24","1","A","BINONG PERMAI C-4/26 RT.002/011","DESA BINONG","KEC. CURUG","TANGERANG","Banten","0","","","","","","","","3603173112640003","595822586451000","","85J82011447","1550003157701","UCI SANUSI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("27","10001","2016-01-01","","L","BANDUNG","1971-07-14","24","1","AB","GRIYA CEMPAKA ARUM BLOK B NO. 168 RT. 004/004","KEL WANASABA LOR","KEC. TALUN","CIREBON","JAWA BARAT","45171","08111799207","","","1057-kartu keluarga.pdf","1618-NPWP akoeng.jpg","6943-BPJS Ketenagakerjaan akoeng.jpg","7213-BPJS Kesehatan akoeng.pdf","3209141407710002","471079681426000","","91J82014662","9000001424275","IRWANSYAH RINALDHI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("28","10004","2016-04-11","","P","YOGYAKARTA","1987-05-15","23","1","A","GG. UJUNG ASPAL JL. TRANS AD JATISAMPURNA","","","BEKASI","JAWA BARAT","0","082136833641","","","","","","","00000001","351176474542000","","12023787471","1290009984960","MARLINA RIRIN INDRIYANI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("29","10005","2016-05-09","","L","SUBANG","1966-11-23","24","1","AB","JL. GRADIUL NO. 55 RT. 008/006","KEL. RANCAEKEK KENCANA","KEC. RANCAEKEK","BANDUNG","JAWA BARAT","40394","081320001711","","","","","","","32044282311660006","09.343.585.7-444.000","","","","","5","0","0","0");
INSERT INTO tbl_identitas VALUES("30","10007","2016-12-01","","P","MEDAN","1967-03-13","25","2","O","JL. RAWABOLA NO.1  RT.002/007","KEL. KELAPA DUA WETAN","KEC. CIRACAS","JAKARTA TIMUR","JAKARTA","0","081283628840","","","","","","","3175105303670006","478004997005000","","89J82009724","1290009726692","HANNA FARIDA TAMPUBOLON","1","0","0","0");
INSERT INTO tbl_identitas VALUES("31","10011","2017-07-01","","P","Jakarta","1992-10-21","32","1","A"," JL. H. Hasan I No 60 RT.001./001 ","Kel. Baru","Kec. Pasar Rebo ","Jakarta Timur","Jakarta","0","","","","","","","","","717305544009000","","15022385262","15022385262","TRIA OKTAVIANI","3","0","0","0");
INSERT INTO tbl_identitas VALUES("32","10014","2018-01-02","","L","","1978-01-15","24","1","A","Jl. Taman Raya C1 No.1 RT 014 RW 013 Taman Kalijaga Permai","Kalijaga","Harjamukti","Cirebon","Jawa Barat","45144","081320714029","","980-KTP ZL.jpg","4199-KK.jpg","1483-NPWP.jpg","4930-BPJS Tenaga Kerja.jpg","9173-BPJS Kes.pdf","3274031501780013","47.108.074.7-426.000","0001628581094","98J82031646000","1340013421366","IRWAN ZAINI LUTHFI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("33","10023","2018-04-09","","L","","1987-10-26","24","1","A","dsa","","","","","0","","","","","","","","","450975032417000","","","1290009982782","ADE GUSTIKA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("34","10","2015-04-15","","P","","1970-04-01","25","1","A","aaaa","","","","","0","","","","2373-KK.jpg","","","","","570216853005000","01JP0433691","01JP0433691","328654420","R.A. Ayu Suzanne P.","4","0","0","0");
INSERT INTO tbl_identitas VALUES("35","10058","2016-05-01","","L","","1982-08-17","33","1","A","a","a","a","","","0","","","1111-KTP.pdf","3845-KK Rizal.pdf","8019-NPWP.pdf","7192-BPJS.jpeg","6857-BPJS.jpeg","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("36","10002","2016-01-01","","L","Kuningan","1974-05-24","24","1","O","PERMATA HARJAMUKTI BLOK L 7 NO. 4 RT. 009/016","KEL. KECAPI","KEC. HARJAMUKTI","CIREBON","JAWA BARAT","45142","08122355829","","1049-KTP Pak Dede609.jpg","5262-IMG-20181214-WA0013[1].jpg","2316-NPWP Pak Dede611.jpg","2937-IMG_20181214_141926[1].jpg","7898-IMG-20181214-WA0011[1].jpg","3274032405740010","471079939438000","0001629150625","93J80110443","1340098001299","DEDE AHMAD NURHADI","1","0","0","340197");
INSERT INTO tbl_identitas VALUES("37","10052","2017-10-02","","L","JAKARTA","1975-05-31","24","1","AB","KOMP.UNILEVER A-21","Rempoa","Ciputat Timur","Tangerang Selatan","Banten","15412","087822203937","","4459-KTP Eko.pdf","1175-KK Eko_001.jpg","6475-NPWP Eko.pdf","","4500-KARTU_0001819347309.pdf","367405310575","69.787.607.0-411.000","0001819347309","","1290011230022","Eko Prabowo","1","0","0","0");
INSERT INTO tbl_identitas VALUES("38","10075","2018-04-05","","L","Jakarta","1992-03-10","24","1","A","Bumi Bekasi Baru Utara Jl. Selecta 1 no. 181 RT005 RW006","Pengasinan","Rawa Lumbu","BEKASI","Jawa Barat","0","","","991-ktp kiki-01.png","","","","","3175071003920010","aasd","","3175071003920010","5270698257","Rizki Ehsy Pangarso","2","0","0","0");
INSERT INTO tbl_identitas VALUES("39","10101","2018-09-01","","P","Jakarta","1968-09-27","13","1","O","Puri Gading, Villa Kintamani, Blok A2/3A","Jati Melati","Pondok Melati","Bekasi","Jawa Barat","17415","0812 1373266","","8610-KTP.pdf","9091-KK.pdf","1393-NPWP.pdf","5206-JAMSOSTEK.pdf","4502-BPJS KESEHATAN.pdf","3275126709680005","47.802.230.4-407.000","0001629149635","87 J82019917","129-00-0423326-4","Yati Melasari","1","0","0","0");
INSERT INTO tbl_identitas VALUES("40","10103","2018-10-01","","L","KUNINGAN","1974-03-11","24","1","O","Jl.Astina IV FB.31 No.01 Taman Tukmudal Indah","Tukmudal","Sumber","Cirebon","JAWA BARAT","0","0812 2211 5974","","","602-IMG20181213154426[1].jpg","3986-IMG20181213154542[1].jpg","6446-IMG20181213154514[1].jpg","","3210181103740001","3208221605120002","0001628582567","98J82031406000","134 00 1353 5041","YAYANG SUPIYAR","1","1","1","0");
INSERT INTO tbl_identitas VALUES("41","10104","2018-10-01","","L","TEGAL","1971-05-24","25","1","B","PURI CIREBON LESTARI BLOK F1 NO 9 RT01RW07","KECOMBERAN","TALUN","CIREBON","JAWA BARAT","451710","081380718247 / 081573369859","","2311-ktp_ujang.jpg","1392-UJANG_Page_4.jpg","2952-UJANG_Page_3.jpg","376-BPJS UJANG.jpg","9995-BPJS UJANG.jpg","3209142405710002","595801481404000","0001632622814","0001632622814","1340013533475","Ujang","1","0","0","0");
INSERT INTO tbl_identitas VALUES("42","10105","2018-10-01","","L","CIREBON","1973-09-08","33","1","O","BUKEPIN II BLOK D2 NO 12 RT03 RW06","KEPONGPONGAN","TALUN","CIREBON","JAWA BARAT","0","081946810055","","8516-20181213_151456[1].jpg","9717-20181213_151228[1].jpg","1772-20181213_151425[1].jpg","4958-20181213_151417[1].jpg","7113-20181213_151409[1].jpg","3209140809730005","\'47.108.083.8-426.000","0001628576807","98J82031885","134 00 1352719-6","RD MOCH ERWIN SISWANTO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("43","10106","2018-10-01","","L","SURABAYA","1972-11-05","24","1","B","PERMATA HARJAMUKTI III D6 NO 11 RT05 RW14","Kali Jaga","HARJAMUKTI","CIREBON","JAWA BARAT","45144","082128866902","","2177-20181214_090226.jpg","1633-IMG-20181214-WA0038.jpg","7167-20181214_090248.jpg","8314-20181214_090301.jpg","2015-20181214_090423.jpg","3274030511720005","47.108.000.2-426.000","0001628580137","3578140511720002","134-00-1353401-0","Deddy Khoirul Anam","1","0","0","0");
INSERT INTO tbl_identitas VALUES("44","10107","2019-10-01","","L","MALANG","1970-08-22","24","1","A","JL NGAGLIK IV-B / 51 RT01 RW 09","SUKUN","SUKUN","MALANG","JAWA TIMUR","0","","","","","","","","3573042208700006","3573041908080030","0001629575717","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("45","10102","2018-10-01","","L","KUNINGAN","1976-04-20","25","1","A","DUSUN 03 KARANG ANYAR RT03 RW05","GUMULUNG LEBAK","Greged","Cirebon","Jawabarat","45170","085324482442","","","400-IMG_20181213_225606[1].jpg","4029-IMG_20181213_225023[1].jpg","2609-IMG-20181214-WA0004[1].jpg","","3209382004760003","3209381411080001","0000067803772","3209382004760003","134-00-1353402-8","Arif Hartono","1","0","0","0");
INSERT INTO tbl_identitas VALUES("46","10108","2018-10-01","","L","MALANG","1970-06-04","23","1","A","PERUM GOR RAGIL REGENCY BLOK D-12A RT05  RW01","WONOKOYO","Kedung kandang","MALANG","JAWA TIMUR","0","","","","","","","4767-IMG20181214143949.jpg","3514092706700001","3573031912120008","0001629576606","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("47","10110","2018-10-01","","L","Jakarta","1976-06-13","24","1","A","BLOK KR JAMBE KIDUL RT11 RW05","Pekantingan","Klangenan","Cirebon","JAWA BARAT","0","","","5951-KTP Eko.jpg","8290-KK Eko.jpg","1854-NPWP eko.jpg","","","3209231306760011","3209232502090025","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("48","10109","2018-11-01","","L","Jakarta","1977-04-25","25","1","A","JL WIDARASARI I NO 07 RT01 RW03","SUTAWINANGUN","KEDAWUNG","cirebon","JAWA BARAT","0","","","","","","","","3209202504770003","3209202202100007","0001628578541","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("49","10111","2018-11-01","","L","CIREBON","1977-04-02","24","1","B","BLOK KAUM RT03 RW01","CANGKRING","PLERED","CIREBON","JAWA BARAT","0","08122064406","","7854-C360_2015-09-14-13-08-59-344.jpg","3388-KK (4).jpg","3625-NPWP 1.jpg","4315-BPJS  (3).jpg","7494-BPKS KES (2).jpg","3209360204770002","3209362904080019","0001628579452","","","","1","1","0","0");
INSERT INTO tbl_identitas VALUES("50","10112","2018-11-01","","L","BATANG","1970-07-09","24","1","A","DK KECUBUNG DS GONDANG RT06 RW02","GONDANG","SUBAH","BATANG","JAWA TENGAH","0","","","2061-KTP.jpg","9495-KK Juwadi.jpg","5178-NPWP 01.jpg","817-BPJS 2.jpg","9658-BPJS Kes.jpg","3325090907700001","3325092702071139","0001629422919","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("51","10113","2018-11-01","","P","Jakarta","1976-09-15","22","1","A","TAMAN BIMA PERMAI BLOK B7  RT01 RW09","TUK","KEDAWUNG","CIREBON","JAWA BARAT","0","08122216660","","118-KTP Istri & Suami.pdf","2668-Kartu Keluarga.pdf","4337-NPWP Fitri.pdf","4766-BPJS Fitri.pdf","223-BPJS Kesehatan.jpg","3209205509760002","3209202302062184","0001628578653","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("52","10114","2018-11-01","","L","BANDUNG","1970-06-16","24","1","A","JL SUKAGALIH RT03 RW04","SUKABUNGAH","SUKAJADI","BANDUNG","JAWA BARAT","0","","","","","","","","3273071606700010","3273072912140008","0001632636527","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("53","10115","2018-11-01","","L","Solo","1971-06-03","25","1","A","PERUM DINAR MAS UTARA I/68 RT01 RW19","METESEH","TEMBALANG","SEMARANG","JAWA TENGAH","50271","082135539638","","7670-IMG_20181211_115327.jpg","4015-IMG_20181211_115757.jpg","8512-IMG_20181211_115402.jpg","2320-IMG_20181211_115337.jpg","9076-IMG_20181211_115352.jpg","3374110306710005","3374111212051766","0001628613516","3374110306710005","900 00 2932720 3","suryo subono","1","0","0","0");
INSERT INTO tbl_identitas VALUES("54","10116","2018-11-01","","L","TUBAN","1968-12-31","24","1","A","JL. PARIKESIT RAYA RT10 RW02","BANYUMANIK","BANYUMANIK","Semarang","JAWA TENGAH","0","08122542984","","6356-Data Moeis.jpg","3215-KK Moeis.jpg","4965-Data Moeis.jpg","","1907-Data Moeis.jpg","3374113112680014","3374111212050485","0001079929157","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("55","10117","2018-11-01","","L","Pematang Siantar","1976-01-12","24","1","A","P4A BLOK F-123 JL GAMBYONG V RT07 RW011","PUDAKPAYUNG","BANYUMANIK","","","0","","","","","","","","3374111201760009","3374112605080023","0001628615373","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("56","10118","2018-10-01","","L","Tegal","1975-07-03","25","1","A","JL. RA KARTINI RT01 RW08","Slawi Kulon","SLAWI","TEGAL","JAWA TENGAH","0","","","","","","","","3328100307750004","3328102402081049","0001628615777","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("57","10119","2018-11-01","","L","BLORA","1972-06-13","25","1","A","GEDAWANG PERMAI BLOK E-4 RT03 RW04","GEDAWANG","BANYUMANIK","SEMARANG","JAWA TENGAH","0","","","2892-ktp_1.jpg","1100-kk_1.jpg","9400-NPWP_1.jpg","5804-bpjs tenaga kerja_1.jpg","1196-1544249369169480038559.jpg","3374081306720002","3374111212054229","0001629423966","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("58","10120","2018-11-01","","L","Wonogiri","1976-03-30","24","1","A","BTN POLRI BLOK H NO 19 RT03 RW06","CEMPAKA","PLUMBON","CIREBON","JAWA BARAT","0","","","","","","","","3209183103760002","3374111212054229","0001628577876","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("59","10122","2018-11-01","","L","CIREBON","1973-02-14","25","1","A","JL SENA 3 BLOK H NO 1 BIMA PERMAI RT04 RW06","TUK","KEDAWUNG","Cirebon","JAWA BARAT","0","08112419489","","","","","","","3209201402730003","724596135426000","0001628578438","3209201402730003","1340013527204","Teddy.Arrisandi","1","1","0","0");
INSERT INTO tbl_identitas VALUES("60","10123","2018-10-01","","L","CIREBON","1977-04-19","25","1","A","BLOK KUSUMA INDAH GG APEL NO 77 RT10 RW04","SETU KULON","WERU","Cirebon","JAWA BARAT","0","","","","","","","","3209191904770003","3209190810070253","0001628577977","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("61","10124","2018-11-01","","L","Medan","1972-08-30","25","1","O","JL KATULAMPA RT01 RW09","KATULAMPA","BOGOR TIMUR","BOGOR","JAWA BARAT","0","082124083915","","","","","","","1271183008720001","3271020809160007","","","","","7","0","0","0");
INSERT INTO tbl_identitas VALUES("62","10150","2018-08-06","","P","","1964-07-17","24","3","A","Jl. Bangun Cipta I Blok D-12 RT002 RW006","Dukuh","Kramat Jati","Jakarta Timur","Jakarta","0","","","","","","","","3175045707640003","478008485005000","","","1290001085485","IR. TITA PAULINA PURBASARI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("63","10151","2018-10-02","","L","","1969-09-10","23","1","A","asdasdasd","","","","","0","","","","","","","","","170318943016000","","","1650000812710","DIAN TAKDIR BADRSYAH","1","0","0","0");
INSERT INTO tbl_identitas VALUES("64","10031","2015-08-18","","L","BANDUNG","1965-04-21","24","1","A","KP. NYALINDUNG RT. 002/009","KEL. SUKARAJA","KEC. SUKARAJA","SUKABUMI","JAWA BARAT","0","085759946093","","","","","","","3202332104650002","577267164405000","","12017031233","1290011061823","HANDA RUDITA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("65","10149","2018-10-01","","L","Bandung","1971-02-03","24","1","B","Jl Kiara Sari Permai IV no 3 Komp Kiara Sari Bandung rt04 RT04 RW01","Marga Sari","Buah Batu","Bandung","JAWA BARAT","40286","081312529054","","9253-ktp.docx","7268-kk.docx","9579-npwp.docx","2814-bpjs ktnaga krjaan.docx","4377-bpjs kesehatan.docx","3273220302710006","271570442429000","0001632635289","91J82014324000","0513200003443","RONI YUSNANDAR","5","0","0","11442000");
INSERT INTO tbl_identitas VALUES("66","10092","2018-04-17","","P","Menado","1972-12-02","13","3","A","Perum BCI Blok A3 No.9 RT004 RW026","Sukatani","Tapos","Depok","Jawa Barat","0","","","","","","","","","383123429005000","94J82323422","94J82323422","0060005199579","KRISTIANA LIVE SONYA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("67","10094","2018-07-01","","P","Purwokerto","1992-10-04","33","1","O","Jl Pinang Ranti 2 No. 26 Rt 7 Rw 1","Pinang Ranti","Makasar","Jakarta Timur","DKI Jakarta","13560","085747150966","","","","","","","3302104410920003","718385875521000","","15022384877","1390016250635","INDRI KURNIA LESTARI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("68","10028","2016-12-01","","L","","1958-06-29","23","1","A","bekasi","","","","","0","","","","","","","","","478007974407000","","","094846736","ANANG DAUS SOEMANTRI","4","0","0","0");
INSERT INTO tbl_identitas VALUES("69","10125","2018-10-01","","L","Jakarta","1979-04-11","24","1","A","DUSUN IV RT019 RW07","CISAAT","DUKUPUNTANG","CIREBON","JAWA BARAT","0","081324129007","","4450-xx1ktp.jpeg","5634-xx4kk.jpeg","4576-xx5npwp.jpeg","2218-xx2jamsostel.jpeg","8780-xx3bpjs kesa.jpeg","3209231104790008","47.108.101.8-426.000","0001628579215","3209231104790019","1340013421598","DEDY SUTIKNO","1","1","0","0");
INSERT INTO tbl_identitas VALUES("70","10126","2018-11-01","","L","Jakarta","1978-06-11","23","1","A","DUSUN MANIS RT20 RW 01","CIKASO","KRAMATMULYA","CIREBON","JAWA BARAT","0","","","","","","","","3208161106780001","3208160504070001","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("71","10127","2018-10-01","","L","Trenggalek","1971-02-11","25","1","A","KOMP GPA JL DADALI D4 NO 9 RT05 RW13","BOJONGMALAKA","BALEENDAH","BANDUNG","JAWA BARAT","0","089607005393","","947-IMG_20181213_095817-min.jpg","4292-IMG-20181213-WA0004.jpg","9766-IMG_20181213_095851-min.jpg","7983-SAVE_20181213_101056.jpeg","4204-IMG_20181213_095942.jpg","3204321102710001","3204321210120125","0001632623152","94J82322820 000","1300016820485","ISMAIL","1","0","0","0");
INSERT INTO tbl_identitas VALUES("72","10128","2018-10-01","","L","Bogor","1945-02-09","24","1","AB","JL DIENG DN-29 KEPUH PERMAI RT02 RW04","KEPUH KIRIMAN","KEPUH KIRIMAN","Sidoarjo","JAWA TIMUR","61256","085732081833","","","","","","","3515180904700002","3515183001092458","0001633851718","","","","1","1","1","0");
INSERT INTO tbl_identitas VALUES("73","10129","2018-10-01","","L","Banyuwangi","1973-12-22","22","1","O","PERUM SEDATI PERMAI JL.SIKATAN FF.19 RT.39 RW.13","PABEAN","SEDATI","SIDOARJO","JAWA TIMUR","61253","081358973337","","279-15450479303456536927130206996365.jpg","1605-15450479999511874754133830266193.jpg","3481-15450480323634302779861936994371.jpg","8491-15450480964527973568897795839932.jpg","5683-15450480736117500926678884973250.jpg","3515182212730006","572502318602000","0001629925615","","1410007664501","HELMI YUNUS","1","0","0","0");
INSERT INTO tbl_identitas VALUES("74","10130","2018-10-01","","L","Medan","1972-05-19","25","1","A","Jl Marelan V no 11A Lingk-15","Rengas Pulau","Medan Marelan","Medan","SUMATRA UTARA","20255","081260985788","","524-Andri Munandar KTP.pdf","1597-Andr munandar Kartu Keluarga.pdf","306-Andri Munandar NPWP.pdf","6909-Andri Munandar BPJS Ketenagakerjaan.pdf","7114-Andri Munandar BPJS.pdf","1271121905720001","477999817112000","0001638083913","93J80110070000","","Andri Munandar","1","0","0","0");
INSERT INTO tbl_identitas VALUES("75","10131","2018-10-01","","L","Medan","1967-05-21","25","1","B","JL STELLA-III/I NO 4 LK-XIII MEDAN","SIMPANG SELAYANG","MEDAN TUNTUNGAN","Medan","SUMATRA UTARA","20135","081.26.990.1934","","8655-KTP.pdf","625-Kartu Keluarga.pdf","3635-NPWP.pdf","2634-BPJS Ketenagakerjaan.pdf","7646-BPJS Kesehatan.pdf","1271072105670001","47.800.023.5-121.000","0001634459567","3307.11211.0567.0004","01.02.72964.1","SUDARMADI","6","0","0","0");
INSERT INTO tbl_identitas VALUES("76","10132","2018-10-01","","L","Medan","1968-12-19","25","1","B","JL M A SELATAN GG BUANA NO 300 A-","SUKARAMAI I","MEDAN AREA","Medan","SUMATRA UTARA","20216","081245977747","","2008-img003.jpg","3394-img007.jpg","6165-img006.jpg","5581-img004.jpg","2349-img005.jpg","1271101912680002","47.722.922.3-113.000","0001634457317","1271 1019 1268 0002","0081050013286533","Prins Handoyo","1","0","0","0");
INSERT INTO tbl_identitas VALUES("77","10133","2018-10-01","","L","Sigodong-godong","1945-02-10","24","1","A","Jl. Jermal X No A1 Medan ","Denai","Medan Denai","Medan","Sumatera Utara","20227","081370944002","","8086-WhatsApp Image 2018-12-14 at 9.45.52 AM.jpeg","5135-WhatsApp Image 2018-12-14 at 9.42.59 AM.jpeg","781-WhatsApp Image 2018-12-14 at 9.41.44 AM.jpeg","6670-WhatsApp Image 2018-12-14 at 9.44.30 AM (1).jpeg","9662-WhatsApp Image 2018-12-14 at 9.44.30 AM.jpeg","1271201004780002","47.800.051.6-122.000","0001634460153","96J80293721000","105-00-1329001-3","Bakti Sihombing","1","0","0","0");
INSERT INTO tbl_identitas VALUES("78","10134","2018-10-01","","L","Aek Nagaga","1973-06-11","24","1","O","DUSUN IV GANG LANGGAR RT06 RW02","TEMBUNG","PERCUT SEI TUAN","Deli Serdang","SUMATRA UTARA","20371","081266866109","","4266-KTP.jpeg","1013-Kartu Keluarga Julpikar.pdf","6998-NPWP.jpeg","1142-BPJS NAKER.jpeg","76-BPJS KES.jpeg","1271106707670007","1271201206070032","0001634457295","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("79","10135","2018-10-01","","P","Natal","1945-02-27","25","1","AB","JL.AR.Hakim ,Gg.Kolam No. 80 medan","Pasar Merah Timur","Medan Area","Medan","Sumatera Utara","20217","081263611393","","","","","2836-WhatsApp Image 2019-01-03 at 15.31.35.jpeg","","1271106707670007","49.304.120-6-113.000","0001634457295","","","Rahmatul Aini","1","0","0","0");
INSERT INTO tbl_identitas VALUES("80","10136","2018-10-01","","L","Sibaro","1969-09-05","25","1","B","JL SWADAYA PASAR II TIMUR NO 3 LK 23","RENGAS PULAU","MEDAN MARELAN","Medan","SUMATRA UTARA","20255","082234161541.085277336162","","5431-WhatsApp Image 2018-12-14 at 2.08.02 PM.jpeg","9191-WhatsApp Image 2018-12-14 at 4.17.24 PM.jpeg","6001-WhatsApp Image 2018-12-14 at 2.08.02 PM (1).jpeg","5374-WhatsApp Image 2018-12-14 at 2.08.01 PM.jpeg","1053-WhatsApp Image 2018-12-14 at 4.15.06 PM.jpeg","1271060509690005","478142581112000","0001633579874","93J80109494000","1060012883339","SUPRIADI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("81","10137","2018-10-01","","L","Medan","1969-02-14","26","1","O","DUSUN III KOMP PRUMDAM I/BB NO 76","PATUMBAK KAMPUNG","PATUMBAK","Deli Serdang","Sumatera Utara","20361","082272999980","","","","","","","1207211402690003","1207211509096126","0001634458162","","1050013290063","Rachmadi Panjaitan","1","0","0","0");
INSERT INTO tbl_identitas VALUES("82","10138","2018-10-01","","L","Surabaya","1969-04-01","23","1","A","DK Jerawat RT01 RW03 ","Pakal","Babat Jerawat","Surabaya","Jawa Timur","0","","","","","","","","3216060104690033","3578301610130002","0001629569744","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("83","10139","2018-10-01","","L","Mojokerto","1971-12-02","25","1","A","JALAN CINDHE BARU II LINGK CINDE RT03 RW01","PRAJURIT KULON","PRAJURIT KULON","Mojokerto","Jawa Timur","61326","","","7684-KTP.pdf","3603-kk.pdf","9297-NPWP.pdf","1000-BPJS KETENAGAKERJAAN.pdf","5866-BPJS KESEHATAN.pdf","3576010212710004","47.665.167.4-602.000","","","141-00-1022252-9","SYAIFUL","1","1","1","0");
INSERT INTO tbl_identitas VALUES("84","10140","2018-10-01","","L","Mojokerto","1971-08-04","23","1","A","JL BOLA VOLLY BB/02 JAPAN RAYA RT06 RW12","JAPAN","SOOKO","Mojokerto","Jawa Timur","0","","","","","","","","3516130408710006","3516131903040189","0001629569935","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("85","10141","2018-10-01","","L","Bogor","1967-10-29","25","1","A","GRIYA CIWANGI P6 NO 9 RT47 RW 9","CIWANGI","BUNGURSARI","BOGOR","JAWA BARAT","0","","","","","","","","3214132910670002","000000000000000","0001628583028","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("86","10142","2018-10-01","","L","Bandung","1969-05-24","25","1","A","KP KIARA RT01 RW05","MANDALAWANGI","CIPATAT","Bandung Barat","JAWA BARAT","0","","","","","","","","3217072405690005","3217070302060015","0001632634942","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("87","10143","2018-10-01","","L","Bandung","1969-02-23","25","1","B","KOMP BBA BLOK C1 RT01 RW11","JELEKONG","BALEENDAH","Bandung","JAWA BARAT","40375","081214424739","","8151-ktp.jpg","7935-kk.jpg","6136-depke.jpg","","7388-bpjs.jpg","3204322302690001","320432.300305.3515","0001632633682","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("88","10144","2018-10-01","","L","BANDUNG BARAT","1967-04-20","26","1","A","PURI CIPAGERAN INDAH 2C-3/20  RT10 RW20","TANIMULYA","NGAMPRAH","Bandung Barat","JAWA BARAT","0","","","","","","","","3217062004670003","3217060305058976","0001632636178","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("89","10145","2018-10-01","","L","BANDUNG","1965-04-21","24","1","A","JL BELIBIS VI NO 8  RT10 RW06","TENGAH","KRAMAT JATI","JAKARTA TIMUR","JAKARTA","0","","","","","","","","3175102104650009","3175041207170034","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("90","10146","2018-10-01","","L","Gunung Meriah","1968-08-10","25","1","A","KATULAMPA RT02 RW09","KATULAMPA","BOGOR TIMUR","BOGOR","JAWA BARAT","0","","","7259-KTP_Boni.pdf","8673-KK_Boni.pdf","5129-NPWP_Boni.pdf","4368-BJS_Tenagakerja.pdf","7468-BPJS_BoniSehat.pdf","3271021008680003","3271020103073620","0001628600455","JJ080903","031901013277506","Boni Pasius Silalahi","7","0","0","0");
INSERT INTO tbl_identitas VALUES("91","10147","2018-10-01","","L","Bandung","1970-03-15","25","1","A","JL BATU RADEN X RT06 RW 07","MEKARJAYA","RANCASARI","BANDUNG","JAWA BARAT","0","","","","","","","","3214011503700008","3273232212150003","0001710941668","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("92","10148","2018-10-01","","L","Sumedang","1974-08-12","24","1","A","KP SUKARASA DUSUN I RT06 RW02","TANGGULUN TIMUR","KALIJATI","SUBANG","JAWA BARAT","0","","","","","","","","3213041208740002","3213043003062267","0001632625277","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("93","10095","2018-07-01","","P","","1990-06-13","23","1","A","OOOO","","","","","0","","","","","","","","","711721738522000","","15022385247","1310012512614","TISA YUANISA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("94","10034","2016-03-07","","L","BOGOR","1984-04-21","22","1","A","JL. MENTENG BLK 52 NO. 16 RT. 002/004","KEL. MENTENG","KEC. BOGOR BARAT","BOGOR","JAWA BARAT","0","08568982737","","","","","","","3271042104840017","755380086404000","16017572393","16017572393","1330010927382","IBNU SARJONO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("95","10038","2016-05-01","","P","BOGOR","1993-04-21","33","1","A","KP. GELONGGONG RT. 001/001","KEL. WARINGINJAYA","KEC. BOJONG GEDE","BOGOR","JAWA BARAT","0","087770826311","","","","","","","3201136104930002","759813660403000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("96","10039","2016-05-25","","P","Jakarta","1995-08-24","23","1","B","JL. OTISTA RAYA GG. MASJID  RT. 010/009","KEL. BIDARACINA","KEC. JATINEGARA","JAKARTA TIMUR","JAKARTA","0","089676043058","","","","","","","3175036408950002","760064246002000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("97","10042","2017-04-01","","L","","1973-08-16","25","1","A","a","","","","","0","","","4424-ktpoye.jpg","","8711-npwpoye.jpg","7133-jamsosteko oye.jpg","","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("98","10044","2017-05-02","","L","","1993-12-30","33","1","A","a","","","","","0","","","9824-img460 (1).pdf","6227-KK_4.pdf","7111-img463.pdf","7071-img462.pdf","4432-img461.pdf","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("99","10048","2017-05-15","","L","Cianjur","1987-11-28","22","1","A","Blk Residence Jl. Binawan IX Blok 3 no. 1 RT002 RW015","Pamoyanan","Cianjur","Cianjur","Jawa Barat","0","","","","","","","","3203012811870006","545544298406000","","3203012811870006","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("100","10049","2017-06-02","","P","CIAMIS","1990-05-10","23","1","A","KP. SUGUTAMU RT.004/021","BAKTI JAYA","SUKMAJAYA","DEPOK","JAWA BARAT","0","","","","","","","","3276055005900009","353972342005000","","16033203544","6610632821","SITI ROSMAYANTI","2","0","0","0");
INSERT INTO tbl_identitas VALUES("101","10050","2017-06-02","","P","Jakarta","1995-05-23","33","2","A","PERUM BUKIT CIRENDEU BOLK D3 N0.13 RT.001/008","PONDOK CABE ILIR","PAMULANG","Tanggerang Selatan","Banten","0","","","","","","","","3674066305950014","750216954453000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("102","10066","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","0001109239997","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("103","10062","2017-06-01","","L","Jakarta","1985-06-06","24","1","B","Perumahan Permata Timur 1, JL. Permata Timur VIII Blok D-8","Pondok Kelapa","Duren Sawit","Jakarta","DKI Jakarta","13450","081294063545","","","","","","","3175070606850023","679031922008000","","15007504366","1240006922257","ADYA KEMARA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("104","10067","2018-01-02","","P","Surabaya","1993-08-25","33","1","O","Tegal Jaya Permai II/8 BR","Dalung","Kuta Utara","Badung","Bali","80361","081239915828","","584-Ktp Ayu Ratnasari.pdf","4746-KK Ayu Ratnasari.pdf","","","120-BPJS KESEHATAN.jpeg","5103066508930001","83.776.675.7.906.000","510.066508930001","","1410016408577","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("105","10083","2016-11-01","","L","JAKARTA","1975-05-21","22","1","A","JL. CEMPAKA PUTIH BARAT XX/5 RT. 005/007","KEL.CEMPAKA PUTIH BARAT","KEC. CEMPAKA PUTIH","jakarta pusat","dki. jakarta","10520","082111280088","","2049-KTP Indra.jpg","8287-Kartu Keluarga.pdf","583-npwp indra.jpg","6365-Kartu Peserta.jpeg","2648-bpjs kesehatan.pdf","3171052105750003","672422474024000","0001259693471","","7060284231","G.HERYAWAN INDRAYATNA","2","0","0","0");
INSERT INTO tbl_identitas VALUES("106","10060","2017-12-01","","P","GUNUNG KIDUL","1992-01-19","33","1","O","KP. AREMAN NO. 30 RT. 01/08","KEL. TUGU","KEC. CIMANGGIS","DEPOK","JAWA BARAT","0","082299131078","","","","","","","3276025901920006","0000714796968412000","327602590192006","14038628724","1570003387017","DIAN IKA NINGRUM","1","0","0","0");
INSERT INTO tbl_identitas VALUES("107","10167","2018-10-01","","P","Sidoarjo","1984-06-02","23","1","O","DSN WATES RT 006 RW 002","KEDENSARI","KEDENSARI","TANGGULANGIN","Jawa Timur","61272","082299996706","","","","","","","3515064206840005","84.913.900.1-617.000","0001322742879","","1410017104118","Yuni Nurmaya","1","0","0","0");
INSERT INTO tbl_identitas VALUES("108","10069","2018-01-02","","L","Jakarta","1995-07-29","33","1","O","Jl. Pembina 1 No.20 Rt.001/006","Palmeriam","Matraman","Jakarta Timur","DKI Jakarta","13120","081293487645","","2994-WhatsApp Image 2018-12-07 at 14.30.03.jpeg","3650-WhatsApp Image 2018-12-07 at 14.40.46.jpeg","603-WhatsApp Image 2018-12-07 at 14.30.04.jpeg","","4621-WhatsApp Image 2018-12-07 at 14.33.39.jpeg","3175012907950003","838278299001000","0001215223187","","0060010244568","MUHAMAD RIZKI CAHYADI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("109","10064","2017-09-11","","L","Palembang","1988-12-16","23","1","B","Jl. Cekatan no. 41 RT003 RW002","Kelapa Gading Barat","Kelapa Gading","Jakarta Utara","Jakarta","0","","","5709-1. KTP.pdf","","9568-NPWP.jpeg","","5662-BPJS kesehatan ardho.pdf","1971011612880003","981855851043000","0002332926955","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("110","10065","2017-09-11","","P","Jakarta","1994-07-08","33","1","O","Jl. Jaha no. 43 RT010 RW001","Kalisari","Pasar Rebo","Jakarta Timur","Jakarta","13790","","","508-KTP.jpg","6865-KK.jpg","951-NPWP.jpg","8524-BPJS TENAGA KERJA.PNG","8188-BPJS kesehatan melly.pdf","3175054807941001","547991810009000","0001401700961","18004638286","1652288370","Melly Febriyanti","2","0","0","0");
INSERT INTO tbl_identitas VALUES("111","10070","2018-03-01","","L","Bogor","1991-11-22","22","1","A","Villa Ciomas Indah Blok Q9 no. 6, Jl. Garuda Raya","Ciomas Rahayu","Ciomas","Bogor","Jawa Barat","16610","08569840296","","7858-KTP BIMO.jpg","3940-KK BIMO.jpeg","1267-NPWP BIMO.jpeg","6001-BPJS KETENAGAKERJAAN BIMO.jpg","5374-BPJS KESEHATAN BIMO.jpg","3201292211910002","841891815434000","0001642901499","18022465589","1330007646706","Bimo Firizki Diadi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("112","10072","2018-03-01","","P","Bandung","1991-05-18","33","1","B","Jl. Letn Alamsyah 1/135  ","Lahat Tengah","Lahat","Lahat","Sumatera Selatan","31419","","","3706-NUR ASTY PRATIWI - KTP.pdf","3625-KARTU KELUARGA ASTY.pdf","2204-NPWP - NUR ASTY PRATIWI.pdf","4683-BPJS ketenagakerjaan Asty.pdf","6673-BPJS Kesehatan asty.pdf","160405805910005","841210792309000","0002445112157","1604105805910005","9000042900424","Nur Asty Pratiwi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("113","10073","2018-03-01","","L","Bandar Lampung","1994-09-19","33","1","A","Prum. Nusantara Permai blok C4 no. 5 RT015","Campang Raya","Tanjung Karang Timur","Bandar Lampung","Lampung","35122","","","6008-Softcopy KTP.pdf","7915-KK terbaru.pdf","5626-NPWP.pdf","6252-BPJSTKU.pdf","9147-Kartu BPJS Sholeh.pdf","1671051909940002","84.553.085.6-323.000","0001078685392","","1140016070685","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("114","10074","2018-03-01","","L","Medan","1988-10-02","22","2","A","Jl. S Lubis G Pegawai no. 40 ","Sitirejo","Medan Kota","Medan","Sumatera Utara","20219","","","6969-KTP.jpg","263-Kartu keluarga.jpg","9127-NPWP.pdf","8253-BPJS Ketenagakerjaan.png","9403-BPJS Kesehatan.pdf","1271010210680003","841267727122000","0002327862172","18022465548","9000043932582","Bukry Chamma Siburian","1","0","0","0");
INSERT INTO tbl_identitas VALUES("115","10098","2018-07-02","","L","Depok","1992-12-24","33","1","B","JL. TAUFIQURAHMAN NO. 28C, RT. 003/002","BEJI TIMUR","BEJI","DEPOK","JAWA BARAT","16422","081294115381","","6048-03. ktp.jpg","553-Kartu Keluarga Oke.pdf","5918-NPWP.pdf","445-BPJS TK.pdf","6955-BPJS Kesehatan.pdf","3276062412920003","74.207.560.9-448.000","0001326245174","15061029136","157-00-047 4033-9","Syamsul Fadly","1","0","0","0");
INSERT INTO tbl_identitas VALUES("116","10076","2018-03-01","","P","Jakarta","1992-12-10","33","1","O","Jl. RS. Fatmawati GG H.Ayub no. 8A RT001 RW005 ","Cipete Selatan","Cilandak","Jakarta Selatan","Jakarta","12410","","","3446-Identity Card.jpg","3885-img231.jpg","8404-IMG_0004.jpg","3357-cWhatsApp Image 2018-12-13 at 08.15.45.jpeg","8670-cWhatsApp Image 2018-12-13 at 08.15.45 (1).jpeg","3174065012920006","736093683016000","3174065012920006","3174065012920006","0060010272577","LATIFAH","1","0","0","0");
INSERT INTO tbl_identitas VALUES("117","10099","2018-06-17","","L","Semarang","1994-07-19","33","1","B","Jl Jambu Raya no 2 Setiabudi","Sumurboto","Banyumanik","Semarang","Jawa Tengah","50269","024 7471640","","7831-KTP Bayuaji PN-min.jpg","6824-KK Bayuaji.jpg","3805-NPWP.jpg","","","3374111907940001","850516675517000","","","1350014837460","BAYUAJI PRABOWO NUGROHO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("118","10121","2018-10-01","","L","Jakarta","1974-03-15","25","1","A","BTN POLRI RT02 RW06","CEMPAKA","PLUMBON","CIREBON","JAWA BARAT","0","","","","","","","","3209181403740012","3209181407100006","0001628577819","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("119","10080","2018-04-02","","P","Surabaya","1997-02-14","33","1","O","Palem Putri P/1 RT 006 R W003","Balonggabus","Candi","Sidoarjo","Jawa Timur","61271","087754010097","","5859-KTP Feby.pdf","186-KK Feby.pdf","2865-NPWP Feby.pdf","","4177-BPJS Kesehatan Feby.pdf","3515075402970003","843071267617000","0002451136961","","1410016507832","NUR FITRIYAH FEBRIANA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("120","10091","2018-05-02","","P","Serang","1994-03-02","33","1","A","VILLA NUSA INDAH II BLOK AA3/7","BOJONG KULUR","GUNUNG PUTRI","BOGOR","Jawa Barat","16969","089660102024","","2919-WhatsApp Image 2018-11-05 at 11.12.37.jpeg","1658-Untitled-21-min-min.jpg","970-img024.pdf","3165-unnamed.png","4778-KARTU_0001633621228.pdf","3274034203940006","84.781.849.9-403.000","0001633621228","","1330015158454","Tania Intan Sari","1","0","0","0");
INSERT INTO tbl_identitas VALUES("121","10043","2017-04-01","","P","SURABAYA","1992-09-18","33","1","AB","PERUM.TROSOBO UTAMA  JL.TROSOBO UTAMA III/B-29","TAMAN SIDOARJO","","Sidoarjo","Jawa Timur","61257","082132260848","","7101-Resy Alifiyanti Suprapto.pdf","1006-Resy Alifiyanti Suprapto.pdf","4665-NPWP RESY.pdf","2925-BPJS KESEHATAN RESY.jpeg","","3515135809920003","81.733.847.8-603.000","0000198935381","","9000005841607","Resy Alifiyanti","1","0","0","0");
INSERT INTO tbl_identitas VALUES("122","10153","2016-04-01","","L","Jakarta","1985-07-16","23","1","AB","Asrama Brimob rt015/005 Kel Cipinang Kec Pulo Gadung","KEL.CIPINANG","KEC. PULOGADUNG","DKI Jakarta","DKI Jakarta","13240","","","","","","","","3175021607850010","7775046220003000","13035200768","13035200768","9000041710840","Arif Fauzi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("123","10157","2018-08-01","","L","Sumenep","1992-11-02","23","1","A","Perum Batuan Blok NN/20 RT01 RW02","Batuan","Batuan","Sumenep","Jawa Timur","69451","","","6509-KTP rizal.jpg","595-KK terbaru.jpg","726-npwp.jpg","7681-bpjs ketenagakerjaan.jpg","6206-bpjs kesehatan.jpg","3529260211920003","734843352608000","0000104883142","15042975191","1400017900714","MOHAMMAD RIZAL SYARIEF","1","0","0","0");
INSERT INTO tbl_identitas VALUES("124","10154","2016-07-01","","L","Tulung Agung","1969-03-01","24","1","A","Jl. Cempaka Putih Barat XXV RT04 RW07","Cempaka Putih Barat","Cempaka Putih","Jakarta Pusat","Jakarta","0","","","","","","","","3171050103690003","670246222024000","","3171050103690003","1570004822988","WAHJU WIDODO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("125","10155","2018-08-01","","L","Lumajang","1992-02-08","22","1","B","Dsn. Wunutsari RT024 RW06","Jatigono","Kunir","Lumajang","Jawa Timur","67383","","","9500-WhatsApp Image 2018-12-14 at 8.43.18 PM.jpeg","5465-WhatsApp Image 2018-12-14 at 8.43.19 PM.jpeg","7956-WhatsApp Image 2018-12-14 at 8.50.08 PM.jpeg","","5027-WhatsApp Image 2018-12-14 at 2.33.04 PM.jpeg","","807898846625000","3508060802920003","","1410016962763","Sofyan Wahyudi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("126","10158","2018-08-01","","L","Tuban","1996-06-06","33","1","A","Tambak Kemerakan","Tambak Kemerakan","Krian","Surabaya","Jawa Timur","61275","081357628869","","1107-Ktp.jpg","3399-20180220_101608.jpg","279-NPWP.jpg","","","3515110606960003","361032295603000","","","1410016905838","Yoga Wilanda","1","0","0","0");
INSERT INTO tbl_identitas VALUES("127","10159","2018-08-01","","P","Jakarta","1987-12-22","24","1","A","Jl. Swadarma Utara RT09 RW08","Ulujami","Pesanggrahan","Jakarta Selatan","Jakarta","12250","081287772212","","2802-KTP.JPG","5885-KK.JPG","4855-NPWP.jpg","6182-BPJS Ketenagakerjaan.jpg","2567-BPJS Kesehatan.jpg","3671136212870001","698672854416000","3671136212870001","3671136212870001","1010009933373","INDAH SUSANTI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("128","10160","2018-08-01","","L","Surabaya","1993-04-26","33","1","A","Jl. Bogangin 3/98 RT04 RW05","Kedurus","Karang Pilang","Surabaya","Jawa Timur","60223","081231777011","","7481-KTP.jpg","3012-IMG-20181214-WA0003.jpg","5144-IMG-20181214-WA0004.jpg","2338-DOC-20181214-WA0002.pdf","","3578012604930010","847279916618000","","3578012604930010","1410016154056","Inggrid Vio Fernanda","1","1","1","0");
INSERT INTO tbl_identitas VALUES("129","10161","2018-09-03","","L","Bandung","1989-08-02","22","1","A","Komp. Bukit Golf Riverside Cluster Arcadia Blok G2 No. 10 RT/RW 02/28","Bojong Nangka","Gunung Putri","Kab. Bogor","Jawa Barat","16963","082116491531","","","","","","","","733345441444000","3204050208890015","3204050208890015","9000039731550","ADIA PUJA PRADANA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("130","10162","2018-09-03","","L","","1986-02-12","33","1","A","OOO","","","","","0","","","","","","","","","824241251448000","3276065202860004","3276065202860004","1570004878691","RIZQA  AMALIA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("131","10163","2018-09-01","","L","Jogjakarta","1987-01-07","33","1","A","JL. TANGKUBAN PERAHU NO. 6 PERUM PEPELEGI INDAH","","Waru","Sidoarjo","Jawa Timur","0","","","","","","","","3401060701870001","36.270.793.7-544.000","0001805982862","","1410016623720","Nur Agus Rachmawan","1","0","0","0");
INSERT INTO tbl_identitas VALUES("132","10164","2018-09-03","","P","PERLANAAN","1993-02-09","33","1","O","The Taman Dayu, Cluster Pasadena Hilss PH3 No. 20","Karangjati","Pandaan","Pasuruan","Jawa Timur","67156","","","1854-ktp.pdf","5379-KK.pdf","6265-NPWP.pdf","5242-BPJS TK.pdf","9109-BPJSKES.pdf","1208234902930005","851350678117000","0002480658107","17003501446","1080016899263","SWANTI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("133","10165","2018-09-03","","L","","1989-12-23","33","1","O","OOO","","","","","0","","","","","","","","","736412990627000","3510182312890003","3510182312890003","1430018002814","M. SYAIFUL RIFQI ADI K","1","0","0","0");
INSERT INTO tbl_identitas VALUES("134","10166","2018-09-01","","P","YOGYAKARTA","1996-06-29","33","1","O","JL. JATIPADANG III NO.52D","JATIPADANG","PASAR MINGGU","JAKARTA SELATAN","DKI JAKARTA","12540","","","944-KTP.jpg","2369-KK-Priyastiwi.jpg","9398-NPWP.jpeg","2915-BPJS KETENAGAKERJAAN.JPG","6753-BPJS.jpeg","3471126906960001","857991145541000","0001200935709","18070852266","1370015963743","SALMA JOUNARASTI HASNIZA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("135","10168","2018-10-01","","L","Sampang","1991-10-04","22","1","B","Jl. Imam Bonjol 30","Dalpenang","Sampang","Sampang","Jawa Timur","69312","087833700522","","1875-IMG_6715.JPG","2016-IMG_6718.JPG","6569-IMG_6716.JPG","7748-IMG_6717.JPG","4149-IMG_6714.JPG","3527030410910006","823189592644000","0000116543068","16049541127","1400018003906","Hasan Mauludi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("136","10169","2016-12-12","","L","SUMEDANG","1958-06-29","24","1","A","TAMAN WISMA ASRI BLOK AA.15 NO.41 RT.005/020","KEL.TELUK PUCUNG","KEC. BEKASI UTARA","BEKASI","JAWA BARAT","0","","","","","","","","3275032906580013","478007974407000","0001742259047","","094846736","ANANG DAUS SOEMANTRI","4","0","0","0");
INSERT INTO tbl_identitas VALUES("137","10170","2018-08-01","","L","Malang","1987-07-18","23","1","A","JL. JOYOGRAND KAV. DEPAG II NO. 52 RT09 RW-9","MERJOSARI","LOWOKWARU","Malang","Jawa Timur","0","","","","","","","","0001299869087","88.025.088.1-520.000","0001299869087","","144.00.1768671.5","Fauzi Rachman Juang Pribadi","1","0","1","0");
INSERT INTO tbl_identitas VALUES("138","10171","2018-08-15","","L","JOMBANG","1996-03-19","33","1","A","RT 01 /RW 05 DUSUN PARITAN DESA KERAS KECAMATAN DIWEK KABUPATEN JOMBANG","","DIWEK","JOMBANG","JAWA TIMUR","61471","","","8473-WhatsApp Image 2018-12-10 at 14.01.22.jpeg","8062-WhatsApp Image 2018-12-10 at 14.01.22 (1).jpeg","4974-WhatsApp Image 2018-12-10 at 14.04.28.jpeg","5718-WhatsApp Image 2018-12-10 at 14.01.23.jpeg","7251-WhatsApp Image 2018-12-10 at 14.01.23.jpeg","3517081903960003","72.491.098.9-727.000","0002257659011","0002257659011","1440017730794","MUHAMMAD NOFI RISDIANTO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("139","10152","2018-10-02","","L","","1970-06-24","24","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("140","10100","2018-08-01","","P","Jakarta","1995-08-14","33","1","B","Jl. Gandaria II Blok D.O/15 RT04 RW13","Tegal Gundil","Bogor Utara","Bogor","Jawa Barat","0","08111111423","","","","","","","3201015408950012","0000","0001629145809","","1330015291834","Sabila Adinda Puri Andarini","1","0","0","0");
INSERT INTO tbl_identitas VALUES("141","10009","2017-02-01","","L","MOJOKERTO","1976-07-18","25","1","A","VILLA NUSA INDAH 5 BLOK SJ 4 NO.15 RT.001/015","KEL.CIANGSANA","KEC.GUNUNG PUTRI","BOGOR","JAWA BARAT","16968","081314936176","","","","","","","3201021807760006","0000676632797403000","","96J80271875","1290007168202","RONI WIJAYA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("142","10057","2016-05-02","","L","BANDUNG","1978-03-09","23","1","A","JL.H. MERIN KAV BRI BLOCK E NO.1E RT.003/004","MERUYA SELATAN","KEMBANGAN","JAKARTA BARAT","JAKARTA","0","","","","","","","","3273140703780008","542911276086000","","12038529454","9000005579967","ANDI RUSDIANA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("143","10059","2016-11-03","","L","KULON PROGO","1981-08-19","24","1","A","CITRA INDAH BUKIT MAHONI BLOK T 1/25 RT.003/010","KEL.SUKAMAJU","KEC.JONGGOL","BOGOR","JAWA BARAT","0","081314261761","","","","","","","3401121908810001","0000","","14044482652","9000014022611","MUSTOFA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("144","10086","2018-05-02","","L","Surabaya","1988-09-28","33","3","A","Wisma Sarinadi, Jl. Renang M-15","Magersari","Sidoarjo","Sidoarjo","Jawa Timur","61212","081232008788","","4371-KTP.jpg","","8738-NPWP.jpg","","183-BPJS-CARD LOWIG.pdf","3515082809880002","731676219617000","0001456995115","18035643404","1410034600882","Lowig Caesar Sinaga","1","0","0","0");
INSERT INTO tbl_identitas VALUES("145","10096","2018-07-01","","P","","1989-04-12","33","1","A","OOO","","","","","11","","","","","","","","","450588983201000","","15022384752","9000028748979","EVIL RAMADHANI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("146","10016","2018-02-01","","L","Medan","1972-08-06","25","1","O","Pondok Ranggon, RT 003/RW 08","Jati Ranggon","Jati Sampurna","Bekasi","Jawa Barat","17432","081210888699","","4141-ktp.jpeg","2842-kk.jpeg","2397-npwp.jpeg","","3083-bpjs.jpeg","3275100608720010","59.588.311.7-432.000","0001638085072","","020601058656500","MUHAMMAD AGUS SUNARDI","7","1","0","0");
INSERT INTO tbl_identitas VALUES("147","10045","2017-05-08","","L","","1993-07-29","33","1","A","OOO","","","","","0","","","","","","","","","769753310407000","","3275032907930021","1560012036671","MUHAMMMAD FAHRI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("148","10053","2017-05-02","","L","","1977-06-08","25","1","A","OOO","","","","","0","","","","","","","","","269085031401000","","","1630001169328","EDI JUNAEDI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("149","10056","2017-08-01","","L","BANDUNG","1983-02-02","24","1","A","CEMPAKA MEKAR RT.005/004","CIMAREME","NGAMPRAH","BANDUNG","JAWA BARAT","0","","","","","","","","3217060202830035","3217060202830035","","","1310011863166","HENDRY","1","0","0","0");
INSERT INTO tbl_identitas VALUES("150","10017","2018-02-01","","L","Bandung","1967-10-17","24","1","O","Komp. Bali View A1 no. 17 GBA 2 ","Cipagalo","Bojongsoang","Kabupaten bandung","Jawa Barat","40287","08122097050","","9126-WhatsApp Image 2018-12-14 at 13.25.20.jpeg","7618-WhatsApp Image 2018-12-14 at 13.34.44.jpeg","6295-WhatsApp Image 2018-12-14 at 13.25.20 (1).jpeg","5689-WhatsApp Image 2018-12-14 at 13.24.36.jpeg","1312-WhatsApp Image 2018-12-14 at 13.25.19.jpeg","3204081710670001","27.373.331.1-423.000","0001632635234","18022465662","1320015281620","Setya Prayitno","1","0","0","0");
INSERT INTO tbl_identitas VALUES("151","10018","2018-02-01","","L","jakarta timur","1981-05-04","23","1","B","perum. kp.cerewet jln. durian 3 blok f 55 / 21 rt 013 rw 013","duren jaya","bekasi timur","bekasi","jawa barat","17111","08119544601","","4248-KTP.jpg","3424-KK.jpg","6613-NPWP.jpg","","7784-BPJS.jpg","3175010405810003","59.588.310.9-001.000","0001633620824","","0375902343","bagus sugiharto","4","0","0","0");
INSERT INTO tbl_identitas VALUES("152","10084","2016-11-01","","L","Jakarta","1988-02-23","23","1","AB","JL. CEMERLANG NO.23 RT.006/002","KEL.JATIBENING BARU","KEC. PONDOK GEDE","BEKASI","JAWA BARAT","17612","087884472045","","1000-KTP1.jpg","9739-IMG-20181208-WA0089.jpg","9044-IMG_20181208_220436.jpg","5579-IMG_20181208_220342.jpg","3333-IMG_20181208_220518.jpg","3275082302880009","345081665432000","10016499617","10016499617","1570005429999","Ario Seto","1","0","0","0");
INSERT INTO tbl_identitas VALUES("153","10089","2018-05-02","","L","Surabaya","1973-08-12","24","1","A","Dusun Jati Sari RT03 RW 06","Pesanggrahan","Kuto Rejo","Mojokerto","Jawa Timur","0","","","","","","","","3516071206730002","0000","","","1520016508273","AGUS TRIWAHYUDI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("154","10055","2017-08-01","","L","","1981-08-19","24","1","A","d","","","","","0","","","1548-ktp.jpeg","7730-kk.jpeg","2656-npwp.jpeg","","8791-bpjs.jpeg","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("155","10046","2017-05-02","","L","","1982-02-07","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("156","10019","2018-02-01","","L","","1967-12-21","25","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("157","10033","2016-03-07","","P","CIREBON","1986-09-03","22","1","A","GANG DESA NO. 20 RT. 004/001","KEL. PASINDANGAN","KEC. GUNUNGJATI","CIREBON","JAWA BARAT","0","081312474785","","5557-KTP584.pdf","2150-KK Mba Fika603.jpg","2188-NPWP Rafika599.jpg","6078-BPJSKT Rafika601.jpg","9382-BPJS Rafika600.jpg","3209214309860001","755214657426000","0001138437393","16017572385","134-00-06084528","Rafika Afrianne Ichsan","1","0","0","0");
INSERT INTO tbl_identitas VALUES("158","10020","2018-02-01","","L","Bekasi","1972-12-01","25","1","A","Jl.mawar III rt 01 rw 01","Kali baru","Medan Satria","Bekasi","Jawa Barat","0","082311267188","","","","","","","3275060112720013","0000","0001628601265","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("159","10021","2018-02-01","","L","Jakarta","1974-12-26","24","1","A","Citra indah city cluster ebony CE15/05","","Jonggol","Bogor","Jawa Barat","0","081314267100","","2293-ktp.jpg","9898-kartu keluarga.jpg","1218-IMG_0002.jpg","","1743-bpjs sandy.png","3216062612740007","38.312.393.2-009.000","0001633318571","","1680001227501","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("160","10022","2018-02-01","","L","","1968-05-25","25","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("161","10024","2018-05-10","","P","Jakarta","1989-07-29","33","1","O","Jl. Ciputat Baru No. 50","Sawah Lama","Ciputat","Tangerang Selatan","Banten","15413","","","","","","","","","0000","","","1290009982873","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("162","10041","2017-01-02","","L","JAKARTA","1989-06-04","22","1","A","BUKIT KEMIRI  2 BLOK A/XI NO.6 RT. 001/016","KEL.TUGU","KEC. CIMANGGIS","DEPOK","JAWA BARAT","16451","081219504134","","","","","","","3276020406890009","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("163","10156","2018-08-01","","L","","1991-09-21","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("164","10097","2018-07-02","","L","Magelang","1998-11-30","33","1","B","Citrosono 001/002","Citrosono","Grabag","Magelang","Jawa Tengah","56196","081225761130","","2601-KTP.PDF","5929-KK Copy.PDF","1018-NPWP.PDF","1233-BPJS Ketenagakerjaan.PDF","","3308183011980001","85.204.002.1-524.000","","18042045742","1290011433204","Muhammad Rizaq Nuriz Zaman","1","0","0","0");
INSERT INTO tbl_identitas VALUES("165","10090","2018-05-02","","L","Purwakarta","1989-10-28","22","1","A","Kp. Cimanglid RT 06/ RW 02","Sukatani","Sukatani","Purwakarta","Jawa Barat","41167","087779603344","","8607-IMG_20181214_181202.jpg","3948-IMG_20181214_181146.jpg","2823-IMG_20181214_181155.jpg","2522-IMG_20181214_181022.jpg","5159-IMG_20181214_180812.jpg","3214032810890001","84.669.244.0-409.000","0001447845502","3214032810890001","1660001116870","Robi Nugraha","1","0","0","0");
INSERT INTO tbl_identitas VALUES("166","10085","2018-05-02","","L","","1986-04-03","23","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("167","10088","2018-05-02","","L","","1982-04-03","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("168","10087","2018-05-01","","L","Tulungagung","1989-03-16","24","1","B","Perum Vila Bukit Tidar A4-175, RT 8 RW 11","Merjosari","Lowokwaru","Malang","Jawa Timur","65144","085655790709","","8074-KTP.PDF","7800-KK.pdf","4123-NPWP.PDF","4360-KARTU_PESERTA_18035643420.png","9409-Kartu BPJS Arif Rahman.pdf","3504141603890003","736789371629000","0000107298202","18035643420","0346628238","Arif Rahman","8","0","0","0");
INSERT INTO tbl_identitas VALUES("169","10077","2018-03-05","","L","","1994-02-27","33","1","A","OOO","","","","","0","","","","","","","","","842639593001000","","","0060010272502","Ramdani Adam","1","0","0","0");
INSERT INTO tbl_identitas VALUES("170","10068","2018-01-02","","L","Bekasi","1996-12-05","33","1","AB","Blok rabu RT/RW 002/001 Desa Wanahayu","Wanahayu","Maja","Majalengka","Jawabarat","45461","081323401528","","2772-ktp390.jpg","5438-Kartu Keluarga Dicky590.jpg","2652-NPWP Dicky588.jpg","6993-IMG_20181213_223500.jpg","1394-BPJS Dicky589.jpg","3210060512960021","83.600.673.4-438.000","0001406047465","18004638310","1340010480621","Dicky Wahyu Pratama","1","0","0","0");
INSERT INTO tbl_identitas VALUES("171","10061","2016-09-01","","L","TASIK MALAYA","1980-12-07","24","1","O","DUSUN SADANG RT.003/006","KEL. CIBEUSI","KEC.JATINANGOR","SUMEDANG","JAWA BARAT","0","082116906653","","6662-KTP SOFI.jpg","","","4233-BPJS Sofi.pdf","9327-BPJS Sofi.pdf","3211154712800015","00","0001457755593","16044250898","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("172","10051","2016-01-24","","L","BANDUNG","1965-03-25","24","1","A","JL. CIHAMPELAS NO.246 A RT.007/004","KEL.CIPAGANTI","KEC.COBLONG","BANDUNG","JAWA BARAT","42031","08562188333","","","","","","","3273022503650001","71.072.796.423.000","","","1730001530089","Adhi Sujana","1","0","0","0");
INSERT INTO tbl_identitas VALUES("173","10047","2017-05-02","","L","KEBUMEN","1974-03-20","23","1","B","SIKAMBANG RT.01/002","KARANGSARI","KUTOWINANGUN","JAWA TENGAH","Jawa Tengah","54393","082112434335","","9586-WhatsApp Image 2018-12-13 at 15.07.14.jpeg","7156-WhatsApp Image 2018-12-13 at 15.08.06.jpeg","7742-WhatsApp Image 2018-12-13 at 15.07.33.jpeg","7736-WhatsApp Image 2018-12-13 at 15.18.27.jpeg","1323-WhatsApp Image 2018-12-13 at 15.06.41.jpeg","3305102003740007","82.010.398.4-523.000","0001146263804","3305102003740007","166-00-0187187-0","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("174","10032","2016-03-01","","P","CIREBON","1976-10-06","23","1","B","JL. KARIMUN JAWA NO. 56 BTN NUSANTARA RT. 003/002","KEL. ARGASUNYA","KEC. HARJAMUKTI","CIREBON","JAWA BARAT","45145","085295509299","","3569-KTP Mia.pdf","3071-KK Mia.pdf","9911-NPWP Mia.pdf","4680-KARTU_PESERTA_16017572377.png","9276-BPJS Kesehatan Mia.pdf","327434610760010","58.614.050.1-426.000","0001136500446","16017572377","1340005786057","MIA RESTU OKTAVIA SUTANTY","1","0","0","0");
INSERT INTO tbl_identitas VALUES("175","10036","2016-03-07","","P","CIREBON","1988-07-03","33","1","O","DUSUN 03 RT. 025/008","DESA LEMAHABANG KULON","KEC. LEMAHABANG","CIREBON","JAWA BARAT","45183","085643908951","","3235-KTP COMPRESS.jpg","5036-KK.jpeg","2094-NPWP.jpg","5085-16017572419.png","3889-BPJS Kesehatan.jpg","3209074307880006","755215134426000","0001142504021","16017572419","1340010290103","Julian Dwi Kusuma Lestari","1","0","0","0");
INSERT INTO tbl_identitas VALUES("176","10029","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("177","10035","2016-03-07","","L","CIREBON","1985-03-12","24","1","O","Perum Istana Banjar Blok J No20 Rt.005.Rw.001","KEL. Banjarwangunan","KEC. Mundu","CIREBON","JAWA BARAT","45173","081320267160","","4442-KTP Salmadi.pdf","5557-KK Salmadi.pdf","2459-NPWP Salmadi.pdf","","569-Bpjs Kesehatan.pdf","3209101203860016","75.509.174.1-426.000","0001142504043","","1340010266111","Salmadi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("178","10079","2018-04-02","","L","Mojokerto","1997-02-16","33","1","O","Ds.lengkong.dsn lengkong","Lengkong","Mojoanyar","Mojokerto","Jawa timur","0","","","5356-IMG-20181212-WA0006.jpg","6739-IMG-20181211-WA0004.jpg","","495-IMG-20181211-WA0007.jpg","3404-IMG-20181211-WA0005.jpg","3516181602970001","123","","","458968516","Wega Tommy Dwi Pamungkas","4","0","0","0");
INSERT INTO tbl_identitas VALUES("179","10071","2018-04-02","","L","","1988-01-10","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("180","10172","2018-10-01","","L","JAKARTA","1985-08-07","25","1","A","JL. PUSKEMAS NO. 73 RT.004/003","KEL. SETU","KEC. CIPAYUNG","JAKARTA TIMUR","JAKARTA","13880","021.84593809","","","","","","","3175100708850006","670112747009000","09017717068","","0700005342964","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("181","10054","0000-00-00","","P","","0000-00-00","24","1","A","dd","","","","","0","","","","","","","","","d","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("182","10078","0000-00-00","","P","","0000-00-00","23","1","A","dd","","","","","0","","","","","","","","","dd","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("183","10180","2018-11-01","","P","","1975-07-22","25","1","A","o","","","","","0","","","5072-KTP Anggre.pdf","6362-KK.pdf","7505-NPWP.pdf","3173-Jamsostek.pdf","207-BPJS2.pdf","","o","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("184","10181","2018-09-26","","P","Surakarta","1988-10-29","24","1","A","Jl. Behape I Blok CC No.8","Kampung Dukuh","","Jakarta Timue","DKI Jakarta","13550","","","","","","","","","458793668526000","","","1290009982964","Saktia Lesan Dianasari","1","0","0","14113075");
INSERT INTO tbl_identitas VALUES("185","10182","2018-09-26","","P","Depok","1986-04-05","24","1","A","Jl. Jatimulya No. 21 RT 03 RW 03","Jatimulya","Cilodong","Depok","Jawa Barat","16413","","","","","","","","","573465564412000","08020812163000","08020812163000","1570000719246","Aprilizayanti Putri","1","0","1","21000688");
INSERT INTO tbl_identitas VALUES("186","10183","2018-08-10","","L","Sumedang","1970-08-09","24","1","A","Jl. Tubagus Ismail Bawah No. 32 B","Lebak Gede","Coblong","Bandung","Jawa Barat","40132","08122029945","","6601-ID uwk.docx","","9639-NPWP UWK.docx","3256-BPJS TK uwk.docx","6755-BPJS UWK.docx","3273020908700009","67.663.270.6-423.000","0001629146103","3273 0209 0870 0010","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("187","10184","2019-01-02","","L","","1990-05-11","22","1","A","a","","","","","0","","","","","","","","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("188","10186","2019-01-02","","P","","1996-08-13","33","1","A","a","","","","","0","","","","","","","","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("189","10185","2018-11-02","","L","","1996-09-02","33","1","A","a","","","Surabaya","Jawa Timur","0","","","","","","","","","a","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("190","10187","2019-01-02","","L","JAMBI","0000-00-00","32","1","A","JALUR I B MEKAR SARI MAKMUR, RT 002/000  ","DESA MEKAR SARI MAKMUR","SUNGAI BAHAR","JAMBI","JAMBI","0","085266856876","","3007-KTP IHSANUDIN.jpg","3238-KK IHSANUDIN.jpg","1388-NPWP IHSANUDIN.jpg","3301-BPJS TENAGA KERJA IHSANUDDIN.jpg","3553-BPJS KES IHSANUDIN.jpg","1505072302910002","72.320.369.1-331.000","0001299019149","1505 0723 0291 0002","1100006089780","IHSANUDDIN SAPUTRA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("191","10188","2018-11-02","","L","SERANG","0000-00-00","32","1","A","BUMI PASUNDAN ESTATE KAV. 20","PASIR IMPUN","MANDALAJATI","BANDUNG","JAWA BARAT","0","","","2110-BERKAS KRISNAWAN.jpg","5944-img007.jpg","7369-BERKAS KRISNAWAN.jpg","7915-BERKAS KRISNAWAN.jpg","4398-BERKAS KRISNAWAN.jpg","3273301407920002","767796121429000","0001877008274","327301407920002","1360007409672","KHRISNAWAN ARIEF WICAKSONO","1","0","0","0");



DROP TABLE tbl_instansi;

CREATE TABLE `tbl_instansi` (
  `id_instansi` tinyint(1) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_instansi VALUES("1","PT Jasamarga Properti","PT Jasamarga Properti","","Graha Simatupang Tower Tower 2b Lt.3 Jl. TB Simatupang Kav 38","","","jasamargaproperti.co.id","jmp@jasamargaproperti.co.id","logo.png","1");



DROP TABLE tbl_inventaris;

CREATE TABLE `tbl_inventaris` (
  `id_invent` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `tipe_barang` varchar(255) DEFAULT NULL,
  `kode_jenis_barang` int(255) NOT NULL,
  `no_seri` varchar(255) DEFAULT NULL,
  `tanggal_invent` date NOT NULL,
  `pj` varchar(255) NOT NULL,
  `KD_UNIT` int(255) NOT NULL,
  PRIMARY KEY (`id_invent`),
  KEY `ds` (`kode_jenis_barang`),
  KEY `sd` (`KD_UNIT`),
  CONSTRAINT `ds` FOREIGN KEY (`kode_jenis_barang`) REFERENCES `tbl_ref_jenis_barang` (`kode_jenis_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_inventaris VALUES("1","ASUS ","A442UR-GA04TT","1","J4N0CV064272166","2018-07-16","mela","264");
INSERT INTO tbl_inventaris VALUES("2","ASUS ","A442UR-GA04TT","1","J4N0CV010631146","2018-07-16","","222");
INSERT INTO tbl_inventaris VALUES("3","ASUS ","A442UR-GA04TT","1","J4N0CV06434516C","2018-07-16","","213");
INSERT INTO tbl_inventaris VALUES("4","ASUS ","A442UR-GA04TT","1","J4N0CV064252160","2018-07-16","","222");
INSERT INTO tbl_inventaris VALUES("5","ASUS ","A442UR-GA04TT","1","J4N0CV064333167","2018-07-16","","211");
INSERT INTO tbl_inventaris VALUES("6","ASUS ","A442UR-GA04TT","1","J4N0CV06428116B","2018-07-16","","300");
INSERT INTO tbl_inventaris VALUES("7","ASUS ","A442UR-GA04TT","1","J4N0CV064311169","2018-07-16","","260");
INSERT INTO tbl_inventaris VALUES("8","ASUS ","A442UR-GA04TT","1","J4N0CV064310169","2018-07-16","","260");
INSERT INTO tbl_inventaris VALUES("9","ASUS ","A442UR-GA04TT","1","J4N0CV064256163","2018-07-16","","260");
INSERT INTO tbl_inventaris VALUES("12","ASUS ","V221IC","2","J4PTCJ01454417D","2018-07-16","","261");
INSERT INTO tbl_inventaris VALUES("14","ASUS ","V221IC","2","J4PTCJ01645317B","2018-07-16","","261");
INSERT INTO tbl_inventaris VALUES("15","ASUS ","V221IC","2","J4PTCJ01455817D","2018-07-16","","261");
INSERT INTO tbl_inventaris VALUES("16","ASUS ","V221IC","2","J4PTCJ01467117F","2018-07-16","","261");
INSERT INTO tbl_inventaris VALUES("17","ASUS ","V221IC","2","J4PTCJ01608217E","2018-07-16","","253");
INSERT INTO tbl_inventaris VALUES("18","ASUS ","V241IC","2","J4PTCJ00C014159","2018-07-16","","200");
INSERT INTO tbl_inventaris VALUES("19","ASUS ","V241IC","2","J2PTCJ008120063","2018-07-16","","200");
INSERT INTO tbl_inventaris VALUES("20","ASUS ","V241IC","2","J3PTCJ00C92611E","2018-07-16","","200");



DROP TABLE tbl_jabatan;

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `no_sk` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

INSERT INTO tbl_jabatan VALUES("1","10012","Perawats","","Biro Adm.Kepegawaian","1992-08-11","EB.HK1-KPTS.031");
INSERT INTO tbl_jabatan VALUES("2","10012","Tata Usaha Keselamatan dan Kesehatan Kerja","","Biro SDM Sub Bag. Sumber Daya Manusia","2018-09-20","CC.HK1-KPTS.042");
INSERT INTO tbl_jabatan VALUES("4","10012","Tata Usaha Keselamatan dan Kesehatan Kerja","","Biro SDM Sub Bag. Sumber Daya Manusia","1995-12-19","CC.HK1.KPTS.106.1995");
INSERT INTO tbl_jabatan VALUES("6","10012","Juru Tata Usaha Klaim							Juru Tata Usaha Klaim","","Biro Sumber Daya Manusia","1998-05-25","007/BG.P-6b/1998");
INSERT INTO tbl_jabatan VALUES("7","10012","Juru Tata Usaha Klaim","","Biro Adm. Kepegawaian","2002-07-16","018/EB.P-6b/2002");
INSERT INTO tbl_jabatan VALUES("8","10012","Sekretaris Direktur Sumber Daya Manusia","","Sekretaris Perusahaan","2007-02-28","013/EA.P-6a/2007");
INSERT INTO tbl_jabatan VALUES("9","10012","Director Secretary","","Corporate Secretary","2013-04-26","015 /EB.P-6b/2013");
INSERT INTO tbl_jabatan VALUES("10","10","Specialist Divisi Teknik","","Divisi Teknik","2018-08-06","010/AA.P-6a/2018");
INSERT INTO tbl_jabatan VALUES("11","10","Project Manager Pelaksanaan Proyek Pembangunan Perumahan Royal Pandaan","","Divisi Teknik","2017-08-01","008/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("12","10","Manager Pelaksanaan Teknik","","Divisi Teknik","2017-01-03","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("13","10150","Direktur Teknik","","PT JMP","2018-08-06","636/EA.p-6c/2018");
INSERT INTO tbl_jabatan VALUES("14","9","Specialist","","PT JMP","2013-10-23","090/EA.P-6a/2013");
INSERT INTO tbl_jabatan VALUES("15","9","Staf Pratama Satu","","PT JMP","2013-03-07","016/AA.P-6c/2013");
INSERT INTO tbl_jabatan VALUES("16","9","Manager Keuangan","","PT JMP","2017-01-03","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("17","10003","Specialist","","PT JMP","2016-03-29","025/EA.P-6a/2016");
INSERT INTO tbl_jabatan VALUES("18","10004","Specialist","","PT JMP","2016-03-16","025/EA.P-6a/2016");
INSERT INTO tbl_jabatan VALUES("19","10004","Manager Pemasaran","","PT JMP","2018-01-03","001/AA.P-6a");
INSERT INTO tbl_jabatan VALUES("20","10008","Senior Specialist","","PT JMP","2016-11-24","190/EA.P-6a/2016");
INSERT INTO tbl_jabatan VALUES("21","10009","Assistant Manager","","PT JMP","2017-01-16","023/EB.P-6c/2017");
INSERT INTO tbl_jabatan VALUES("22","10009","Assistant Manager","","PT JMP","2017-02-06","002/JMP.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("23","6","Senior Specialist","","PT JMP","2017-03-03","037/EA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("24","10010","Specialist","","PT JMP","2016-03-29","022/EA.P-6c/2016");
INSERT INTO tbl_jabatan VALUES("25","10010","Specialist","","Kementrian BUMN","2016-08-05","010/EA.P-6d/2016");
INSERT INTO tbl_jabatan VALUES("26","10010","Senior Specialist","","PT JMP","2018-03-03","203/EA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("27","10011","Specialist","","PT JMP","2017-06-22","325/EA.P-6c/2017");
INSERT INTO tbl_jabatan VALUES("28","10172","General Manager","","PT JMB","2016-10-03","136/ea.p-6C/2016");
INSERT INTO tbl_jabatan VALUES("29","10015","Assistant Manager","","PT JMP","2018-01-09","021/EB.P-6a/2018");
INSERT INTO tbl_jabatan VALUES("30","10149","Assistant Manager","","PT JMP","2018-10-01","851/EE.P-6c/2018");
INSERT INTO tbl_jabatan VALUES("31","10042","Assistant Manager","","PT JMP","2017-01-03","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("32","7","General Manager Tempat Istirahat dan Pelayanan","","Departemen Tempat Istirahat dan Pelayanan","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("33","10099","SENIOR OFFICER TEKNIK","","DIVISI TEKNIK","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("34","10081","Senior Officer","","Keuangan","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("35","10181","Staf Pratama Satu","","Bagian Hubungan Industrial","2012-07-02","142/EB.p-3a/2012");
INSERT INTO tbl_jabatan VALUES("36","10013","Petugas Pengumpul Tol","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("37","10013","Officer ","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("38","10013","Senior Officer","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("39","10013","Assistan Manager","","Human Capital Services Kantor Pusat PT Jasamarga ","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("40","10149","Pengumpul Tol","","Cabang Purbaleunyi","1991-03-06","");
INSERT INTO tbl_jabatan VALUES("41","10149","Kepala Shift","","Cabang purbaleunyi","2011-09-12","");
INSERT INTO tbl_jabatan VALUES("42","10149","","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("43","10086","Project Manager","","Jasamarga Ngawi Kertosono","2018-05-02","");
INSERT INTO tbl_jabatan VALUES("44","10168","Marketing Administration Officer","5485-IMG_6886.JPG","Project Property","2018-10-01","118/AA-JMP/PKWT/X/2018");
INSERT INTO tbl_jabatan VALUES("45","10079","Officer field project","","Rest area 597 ngawi kertosono","2018-08-23","069/CA-JMP/PKWT/V11/2018");
INSERT INTO tbl_jabatan VALUES("46","10001","Manager Regional Jawa Timur","6085-soker011.pdf","Related Bussiness","2018-10-31","");
INSERT INTO tbl_jabatan VALUES("47","10122","Supervisor Area","","Rest Area Solo-Ngawi","2018-10-01","029/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("48","10103","SUPERVISOR","","AREA TIP 207 A PALIKANCI","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("49","10135","Superpa","","JMKT","2018-10-01","042/AA.P_3b/x/2018");
INSERT INTO tbl_jabatan VALUES("50","10133","Supervisor","9476-Perjanjian PKWTT an Bakti Sihombing.pdf","JMP / JMKT","2018-10-01","No.040/AA.P-3b/x/2018");
INSERT INTO tbl_jabatan VALUES("52","10106","SUPERVISOR  Rest Area KM 26 A Ruas Jasamarga Pandaan Malang , diTugaskan sementara sebagai suoervisor  Rest Area KM 725 A , Ruas Jasamarga Surabaya Mojokerto","8649-1544758621253693892731.jpg","Ruas Jasamarga Pandaan Malang","2018-10-01","013/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("53","10020","Supervisor JMP","","TIP JSB","2018-12-01","");
INSERT INTO tbl_jabatan VALUES("54","10113","SO Marketing","","Regional","2018-11-01","");
INSERT INTO tbl_jabatan VALUES("55","10112","SO Tekhnik","","JMP JSB","2018-11-01","");
INSERT INTO tbl_jabatan VALUES("57","10137","suverpisor","","JMP/jmkt","2018-10-01","NO.044/AAP-3b/x/2018");
INSERT INTO tbl_jabatan VALUES("58","10033","Staf Administrasi Tenan 207","7081-SK FIKA608.pdf","","0000-00-00","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("59","10036","Staf Administrasi SPBU","1193-SK.pdf","Direktorat Pengembangan Teknik","2017-01-03","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("61","10132","Supervisor Rest Area Km 67-A","1411-img008.jpg","Ruas Jasamarga Kualanamu Tol","2018-10-01","039/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("62","10132","","8954-img009.jpg","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("63","10132","","363-img010.jpg","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("64","10132","","8788-img011.jpg","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("65","10132","","6329-img012.jpg","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("67","10132","","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("68","10134","SUPERVISOR","8506-PERJANJIAN JULPIKAR.pdf","JMP/JMKT","2018-10-01","Nomor : 041/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("69","10017","SENIOR OFFICER","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("70","10091","OFFICER PELAPORAN ","","Departemen Hr & General Affair","2018-05-07","015/CA.P-6a/2018");
INSERT INTO tbl_jabatan VALUES("71","10104","","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("72","10073","Senior Officer Quality Controll","8772-SK.pdf","Teknik Pelaksanaan Jasamarga Properti","2018-03-01","009/CC-JMP/S-KET/III/2018");
INSERT INTO tbl_jabatan VALUES("73","10061","Asisten Manajer Pemasaran","7982-001 - 2017 Mutasi dan penempatan  KAryawan PT JMP.PDF","TIP","2017-01-03","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("74","10051","","","","2018-11-01","");
INSERT INTO tbl_jabatan VALUES("75","10157","Site Manager Spring Residence Sidoarjo","4360-Dok baru 2018-11-09 11.12.22_1.jpg","Divisi Teknik","2018-11-01","130/CA-JMP/PKWT/XI/2018                                                                                                                                                                                                                                   ");
INSERT INTO tbl_jabatan VALUES("76","10043","STAFF ADMINISTRASI UMUM SIDOARJO ","3297-KONTRAK KERJA 2018.pdf","PROYEK SIDOARJO 1&2","2018-04-30","028/CA-JMP/PKWT/IV/2018");
INSERT INTO tbl_jabatan VALUES("77","10136","Supervisor Rest Area","8324-Image_006.pdf","TIP Rest Area KM 67 B JMKT","2018-10-01","043/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("80","10130","Supervisor Rest Area KM 67 A Ruas Kuala namo Tol","1967-PKWTT PT JMP - ANDRI MUNANDAR.pdf","Rest Area KM 67 A","2018-10-01","037/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("82","10035","Pengawas SPBU","","SPBU","2017-01-01","001/AA.P-6a/2017");
INSERT INTO tbl_jabatan VALUES("83","10160","Marketing executive","","Project property","0000-00-00","128/CA-JMP/PKWT/XI/2018");
INSERT INTO tbl_jabatan VALUES("84","10183","Rest Area Operation Manager TIP 88A ","3100-SK TIP 88A.docx","","2018-08-15","015/CA.P-6c/2018");
INSERT INTO tbl_jabatan VALUES("85","10183","Rest Area Operation Manager TIP (sementara)88B","6762-SK TIP 88B (sementara).docx","","2018-08-15","016/CA.P-6c/2018");
INSERT INTO tbl_jabatan VALUES("86","10183","Toll Collection Control Manager","4292-06296_088EAP6a_2015.pdf","Departement Toll Collection Management","2015-06-25","088/EA.P-6a/2015");
INSERT INTO tbl_jabatan VALUES("87","10183","Specialist","21-06296_Usep.pdf","Depart. Indrustrial Relationt Div. HCS","2018-05-02","105/EA.P-6a/2018");
INSERT INTO tbl_jabatan VALUES("88","10183","Toll Collection System Control Manager","","Depart. TCM Divisi Operation Management","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("90","10069","Marketing Executive Office One ","","Divisi Pengembangan Bisnis","2018-01-02","006/CA-JMP/PKWT/I/2018");
INSERT INTO tbl_jabatan VALUES("91","10069","Marketing Supervisor Spring Residence","","Divisi Pemasaran dan Penjualan","2018-11-01","125/CA-JMP/PKWT/XI/2018");
INSERT INTO tbl_jabatan VALUES("92","10143","TEKNISI","","PEMELIHARAAN","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("93","10143","SENIOR OFFICER","","PEMELIHARAAN","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("94","10143","SENIOR OFFICER","","TCM","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("95","10080","Marketing Support","3610-SK 6 Bulan Feby.docx","","2018-07-02","060/AA-JMP/PKWT/VII/2018");
INSERT INTO tbl_jabatan VALUES("96","10080","Marketing Support","5711-SK 3 Bulan Feby.docx","","2018-04-02","025/AA-JMP/PKWT/IV/2018");
INSERT INTO tbl_jabatan VALUES("97","10139","SUPERVISOR","","SUPERVISOR KM 725A SURABAYA MOJOKERTO","2018-10-01","046/AA.P-3b/X/2018");
INSERT INTO tbl_jabatan VALUES("98","10187","","","","0000-00-00","");
INSERT INTO tbl_jabatan VALUES("99","10188","","","","0000-00-00","");



DROP TABLE tbl_jenis_penerimaan;

CREATE TABLE `tbl_jenis_penerimaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(25) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO tbl_jenis_penerimaan VALUES("1","1","THR");
INSERT INTO tbl_jenis_penerimaan VALUES("2","2","Jasa Produksi");
INSERT INTO tbl_jenis_penerimaan VALUES("3","3","Ongkos Cuti");
INSERT INTO tbl_jenis_penerimaan VALUES("4","4","Bantuan Pengobatan");
INSERT INTO tbl_jenis_penerimaan VALUES("5","5","Lembur");
INSERT INTO tbl_jenis_penerimaan VALUES("6","6","Rapel Lembur");
INSERT INTO tbl_jenis_penerimaan VALUES("7","7","Penerimaan Rapel");
INSERT INTO tbl_jenis_penerimaan VALUES("8","8","Faslt. Kr/COP");
INSERT INTO tbl_jenis_penerimaan VALUES("9","9","Rapel Honorarium Direksi/Komisaris");
INSERT INTO tbl_jenis_penerimaan VALUES("10","10","Tambahan Jamsostek");
INSERT INTO tbl_jenis_penerimaan VALUES("11","11","Jaminan Pensiun Perusahaan");
INSERT INTO tbl_jenis_penerimaan VALUES("12","12","BPJS Kesehatan Perusahaan");
INSERT INTO tbl_jenis_penerimaan VALUES("13","13","Rapel Jaminan Pensiun");
INSERT INTO tbl_jenis_penerimaan VALUES("14","14","Rapel BPJS Kesehatan");
INSERT INTO tbl_jenis_penerimaan VALUES("15","15","Rapel BPJS Ketenagakerjaan");
INSERT INTO tbl_jenis_penerimaan VALUES("16","16","Penerimaan  Lainnya");



DROP TABLE tbl_keahlian;

CREATE TABLE `tbl_keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `jenis_keahlian` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO tbl_keahlian VALUES("3","10012","sdm","9094-002-2017 SE  UPACARA.docx");
INSERT INTO tbl_keahlian VALUES("4","10084","TOEP","7137-c.jpg");
INSERT INTO tbl_keahlian VALUES("5","10084","DRONE PILOT","6110-sertipikat drone.jpg");
INSERT INTO tbl_keahlian VALUES("6","10084","PHOTO,VIDEO AND EDITING","");
INSERT INTO tbl_keahlian VALUES("7","10084","TEACHING","3994-b.jpg");
INSERT INTO tbl_keahlian VALUES("8","10135","Berdagang ","");
INSERT INTO tbl_keahlian VALUES("9","10036","SAP Business Processes in Financial Accounting","6250-IMG_0010.jpg");
INSERT INTO tbl_keahlian VALUES("10","10036","SAP Overview","5352-IMG_0009.jpg");
INSERT INTO tbl_keahlian VALUES("11","10183","Ahli K3 Umum","3085-Keputusan Menteri Tenaga Kerja RI.jpeg");
INSERT INTO tbl_keahlian VALUES("12","10069","Microsoft Office","");
INSERT INTO tbl_keahlian VALUES("13","10069","Public Speaking","");
INSERT INTO tbl_keahlian VALUES("14","10069","Strategic Planning","");
INSERT INTO tbl_keahlian VALUES("15","10080","Komunikasi Bisnis, Pengelolaan ( Jurnal, Buku Besar, Adm. Kas Kecil, Kas Bank), Siklus Akuntansi","1818-SERTIFIKAT SIKLUS AKUNTANSI.pdf");
INSERT INTO tbl_keahlian VALUES("16","10080","Penerapan Komputerisasi Manual dan aplikasi MYOB pada Siklus Akuntansi perusahaan Jasa, Dagang, dan Industri","6669-SERTIFIKAT MYOB.pdf");
INSERT INTO tbl_keahlian VALUES("17","10080","Pelatihan dan Sertifikasi Spreadsheet (Excel)","");
INSERT INTO tbl_keahlian VALUES("18","10080","Pengelolaan Adm. Kas & Bank, Adm. Pembelian, Adm. Penjualan, Adm. Kas Kecil","8830-ADMINISTRASI BANK, PENJUALAN, PEMBELIAN, KAS KECIL.pdf");



DROP TABLE tbl_kelas_jabatan;

CREATE TABLE `tbl_kelas_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_jabatan` int(25) NOT NULL,
  `uraian_jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO tbl_kelas_jabatan VALUES("1","1","Komisaris");
INSERT INTO tbl_kelas_jabatan VALUES("2","2","Direktur Utama");
INSERT INTO tbl_kelas_jabatan VALUES("3","3","Direktur");
INSERT INTO tbl_kelas_jabatan VALUES("4","4","General Manager");
INSERT INTO tbl_kelas_jabatan VALUES("5","5","Advisor");
INSERT INTO tbl_kelas_jabatan VALUES("6","6","Manager");
INSERT INTO tbl_kelas_jabatan VALUES("7","7","Specialist");
INSERT INTO tbl_kelas_jabatan VALUES("8","8","Assistant Manager");
INSERT INTO tbl_kelas_jabatan VALUES("9","9","Senior Officer");
INSERT INTO tbl_kelas_jabatan VALUES("10","10","Officer");



DROP TABLE tbl_keluarga;

CREATE TABLE `tbl_keluarga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(25) NOT NULL,
  `hubungan_keluarga` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=354 DEFAULT CHARSET=latin1;

INSERT INTO tbl_keluarga VALUES("4","10012","Suprihanta, S.Kom","L","Jakarta","1969-01-12","49","28");
INSERT INTO tbl_keluarga VALUES("5","10012","Rafif Nurmanda Ghafurutama","L","Tangerang","1998-06-10","20","1");
INSERT INTO tbl_keluarga VALUES("6","10012","Muhammad Permata Wijayanto","L","Tangerang","2002-02-17","16","2");
INSERT INTO tbl_keluarga VALUES("8","10012","Ulfah Rofifah Nurmitasari","P","Tangerang","2005-02-20","13","3");
INSERT INTO tbl_keluarga VALUES("9","10103","EUIS MUSLIAH","P","MAJALENGKA","2018-08-01","0","31");
INSERT INTO tbl_keluarga VALUES("10","10103","FARSYAD AKBAR KARSAWIJAYA","L","MAJALENGKA","2006-05-16","12","1");
INSERT INTO tbl_keluarga VALUES("11","10103","INDHIRA SUPIYAR","P","KUNINGAN","2012-03-19","6","2");
INSERT INTO tbl_keluarga VALUES("12","10104","ICIH KURNIASIH","P","Brebes","1978-04-23","40","31");
INSERT INTO tbl_keluarga VALUES("13","10104","IHZADI AHMAD","L","TEGAL","2001-01-17","17","1");
INSERT INTO tbl_keluarga VALUES("14","10104","FACHRI ANGGA MULA","L","BOGOR","2006-01-13","12","2");
INSERT INTO tbl_keluarga VALUES("16","10106","FENNIE INDAH WAHYUNI","P","SURABAYA","1972-11-23","46","31");
INSERT INTO tbl_keluarga VALUES("17","10106","ANGGIE DEVITASARI","P","CIREBON","2002-12-27","15","1");
INSERT INTO tbl_keluarga VALUES("18","10106","REGITA AZZAHRA CAHYANI","P","CIREBON","2006-09-09","12","2");
INSERT INTO tbl_keluarga VALUES("19","10107","AYU DWI ENDAH","P","NGANJUK","1974-03-25","44","31");
INSERT INTO tbl_keluarga VALUES("20","10107","AULITA PURWANINGTYAS","L","NGANJUK","1999-07-24","19","1");
INSERT INTO tbl_keluarga VALUES("21","10107","AULITA PURWANINGTYAS","L","NGANJUK","2006-02-04","12","2");
INSERT INTO tbl_keluarga VALUES("22","10102","ERI HERLINA","P","Tangerang","1976-04-20","42","31");
INSERT INTO tbl_keluarga VALUES("23","10102","RAMY FAUZAN RAMADHAN","L","Kuningan","2003-11-14","14","1");
INSERT INTO tbl_keluarga VALUES("24","10102","RAIHAN AMRU HASSAN","L","Kuningan","0000-00-00","6","2");
INSERT INTO tbl_keluarga VALUES("25","10102","RAISYA ADIFA FATHINIA","P","Cirebon","2017-01-30","1","3");
INSERT INTO tbl_keluarga VALUES("28","10114","AMALIA KAUTSAR","P","Bandung","0000-00-00","48","31");
INSERT INTO tbl_keluarga VALUES("29","10114","MUHAMMAD ARSYAD A","L","Bandung","2015-06-24","3","1");
INSERT INTO tbl_keluarga VALUES("30","10114","ALDIRA ROMEESA FARZANA","P","Bandung","2018-01-08","0","20");
INSERT INTO tbl_keluarga VALUES("31","10115","KARTINI","P","NGANJUK","1976-02-16","42","31");
INSERT INTO tbl_keluarga VALUES("32","10115","MOCHAMMAD IQBAL MACHMUD","L","NGANJUK","2000-05-18","18","1");
INSERT INTO tbl_keluarga VALUES("33","10115","SAFITRI AULIA SABATINI","P","Semarang","2004-11-24","13","2");
INSERT INTO tbl_keluarga VALUES("34","10115","AURA NURHANIYAH HUWAIDAH","P","Semarang","2010-12-11","7","3");
INSERT INTO tbl_keluarga VALUES("35","10116","SUPARMI","P","KEBUMEN","0000-00-00","48","31");
INSERT INTO tbl_keluarga VALUES("36","10116","DIVYA BUDI AMANTARI","P","Semarang","2000-04-19","18","1");
INSERT INTO tbl_keluarga VALUES("37","10116","LAINYTHA BUDI ANANTA","P","Semarang","2008-03-24","10","2");
INSERT INTO tbl_keluarga VALUES("38","10117","UNDANG SILASARI","L","Palangkaraya","1982-01-02","36","31");
INSERT INTO tbl_keluarga VALUES("39","10117","MUHAMMAD ARJUNUR HUTAGAOL","L","Semarang","2009-08-17","9","1");
INSERT INTO tbl_keluarga VALUES("40","10117","ARSILA ZAHRA NENGTYAS HUTAGAOL","P","Semarang","2013-03-03","5","2");
INSERT INTO tbl_keluarga VALUES("41","10118","PUJI RAHAYU","L","TEGAL","1975-10-31","43","31");
INSERT INTO tbl_keluarga VALUES("42","10118","SYAHRIAN ALVAZADANE","P","TEGAL","2002-07-22","16","1");
INSERT INTO tbl_keluarga VALUES("43","10118","FAISAL HILMI ADRIANSYAH","L","TEGAL","2007-01-29","11","2");
INSERT INTO tbl_keluarga VALUES("44","10118","ZAFIRA","P","TEGAL","2012-01-09","6","2");
INSERT INTO tbl_keluarga VALUES("45","10119","FENY INDAH","P","SEMARANG","0000-00-00","48","31");
INSERT INTO tbl_keluarga VALUES("46","10119","FESI GEMPAR WAHYU EKO PRASETYO","L","Semarang","0000-00-00","48","1");
INSERT INTO tbl_keluarga VALUES("47","10119","FEGI WAHYU DWIANGGA","L","SEMARANG","0000-00-00","48","2");
INSERT INTO tbl_keluarga VALUES("48","10119","FESYA ANGGUN ICHTRIYAR","L","SEMARANG","0000-00-00","11","3");
INSERT INTO tbl_keluarga VALUES("49","10120","DARSI","P","WONOGIRI","2018-03-05","0","31");
INSERT INTO tbl_keluarga VALUES("50","10120","ADIT MULYA SAPUTRA","L","WONOGIRI","2004-06-12","14","1");
INSERT INTO tbl_keluarga VALUES("51","10120","REHAN SAPUTRA","L","CIREBON","0000-00-00","7","2");
INSERT INTO tbl_keluarga VALUES("52","10122","ROKHMAWATI","P","Malaysia","1980-02-07","38","31");
INSERT INTO tbl_keluarga VALUES("56","10123","SUKAESIH","L","Majalengka","1977-08-26","41","31");
INSERT INTO tbl_keluarga VALUES("57","10123","AISYAH CITRA SABILLAH","P","Cirebon","2000-10-14","18","1");
INSERT INTO tbl_keluarga VALUES("58","10123","ACHMAD HAEKAL","L","Cirebon","2007-02-17","11","2");
INSERT INTO tbl_keluarga VALUES("59","10123","ADHYAKSA FAIRUZ","L","Cirebon","2008-01-27","10","3");
INSERT INTO tbl_keluarga VALUES("60","10124","ADE NOVIE ARDHYANI","P","Medan","2018-11-30","0","31");
INSERT INTO tbl_keluarga VALUES("61","10124","MHD RADHIT RAKASA RANGKUTI","L","Medan","2006-10-30","12","1");
INSERT INTO tbl_keluarga VALUES("62","10124","RAISA REGINA RANGKUTI","L","Medan","2008-07-28","10","2");
INSERT INTO tbl_keluarga VALUES("63","10124","MHD RIFFAT RABBANI RANGKUTI","P","Medan","0000-00-00","3","3");
INSERT INTO tbl_keluarga VALUES("64","10125","LIDYA RIMARIYANTINI","P","Batam","1993-06-18","25","31");
INSERT INTO tbl_keluarga VALUES("67","10126","APRIANTI","P","Kuningan","1983-03-03","35","31");
INSERT INTO tbl_keluarga VALUES("68","10126","WISNU ADNRYAN","L","Kuningan","2003-06-16","15","1");
INSERT INTO tbl_keluarga VALUES("69","10127","ELMI RACHMAWATI","P","Surabaya","0000-00-00","42","31");
INSERT INTO tbl_keluarga VALUES("70","10127","FAJAR ADRIANSYAH","L","Trenggalek","1998-07-24","20","1");
INSERT INTO tbl_keluarga VALUES("71","10127","LULU HANAVIA FIRDAUS","L","Trenggalek","2003-01-13","15","2");
INSERT INTO tbl_keluarga VALUES("72","10127","MUHAMMAD TRISTAN ABDILLAH","L","Bandung","2014-03-16","4","3");
INSERT INTO tbl_keluarga VALUES("73","10130","SILVIARINI","P","Rengas Pulau","1997-01-29","21","31");
INSERT INTO tbl_keluarga VALUES("74","10130","FAADHILAH ANDINI","L","Medan","2002-02-04","16","1");
INSERT INTO tbl_keluarga VALUES("75","10130","FAUZI ANANDA","L","Medan","2003-12-12","14","2");
INSERT INTO tbl_keluarga VALUES("76","10130","FAKHRI AKBAR","L","Medan","2013-10-10","5","3");
INSERT INTO tbl_keluarga VALUES("77","10131","MULIA HAYATI","P","Asahan","1966-03-28","52","31");
INSERT INTO tbl_keluarga VALUES("78","10131","DZAKIYYAH NAJDAH HANAANI","P","Medan","1996-03-21","22","1");
INSERT INTO tbl_keluarga VALUES("79","10131","MUHAMMAD ZAID NUR MUSLIMIN","L","Medan","1998-11-16","19","2");
INSERT INTO tbl_keluarga VALUES("80","10131","ZAM-ZAM ALYA LUTHFI","L","Kisaran","2002-04-18","16","3");
INSERT INTO tbl_keluarga VALUES("81","10132","RETNO TRILESTARI","P","Medan","0000-00-00","48","31");
INSERT INTO tbl_keluarga VALUES("82","10132","DONNY PUTRA NUGRAHA HANDOYO","L","Medan","0000-00-00","48","1");
INSERT INTO tbl_keluarga VALUES("83","10132","RANGGA DWI PRAKOSO HANDOYO","L","Medan","0000-00-00","48","2");
INSERT INTO tbl_keluarga VALUES("84","10132","AUDRY BIANDA PUTRI HANDOYO","P","Medan","0000-00-00","48","3");
INSERT INTO tbl_keluarga VALUES("85","10133","SRI WINDAYANI","P","Medan","1979-05-31","39","31");
INSERT INTO tbl_keluarga VALUES("86","10133","ROBY ADAM FAQIH SIHOMBING","L","Medan","2003-10-12","15","1");
INSERT INTO tbl_keluarga VALUES("87","10133","MUHAMMAD BAGAS FAQIH SIHOMBING","L","Medan","2007-08-17","11","2");
INSERT INTO tbl_keluarga VALUES("88","10136","YENNI","P","Medan","1976-07-16","42","31");
INSERT INTO tbl_keluarga VALUES("89","10136","PRIYOGI RAHMAN NUGROHO","L","Mabar","1997-12-29","20","1");
INSERT INTO tbl_keluarga VALUES("90","10136","M FAUZI MUHAIMIN","L","Medan","2001-12-27","16","2");
INSERT INTO tbl_keluarga VALUES("91","10136","RAYSA ISLAMI FASHA","P","Medan","2009-01-17","9","3");
INSERT INTO tbl_keluarga VALUES("92","10137","EVI ISMAYA","P","Surabaya","1980-11-06","38","31");
INSERT INTO tbl_keluarga VALUES("93","10137","EVITA TASQI RACHMADEWI P","P","Surabaya","2001-08-10","17","1");
INSERT INTO tbl_keluarga VALUES("94","10137","ARNETA CANRA KIRANA","P","Surabaya","2002-05-11","16","2");
INSERT INTO tbl_keluarga VALUES("95","10137","MHD ATTARSYACH R PANJAITAN","L","Medan","2008-09-19","10","3");
INSERT INTO tbl_keluarga VALUES("96","10137","MHD ABID AQILA PRANAJA PANJAITAN","L","Deli Serdang","2018-03-24","0","4");
INSERT INTO tbl_keluarga VALUES("97","10138","SILFI ALFITA","L","Surabaya","1975-05-10","43","31");
INSERT INTO tbl_keluarga VALUES("98","10138","RAGA","L","","0000-00-00","0","1");
INSERT INTO tbl_keluarga VALUES("99","10139","SRI UTAMI","P","Surabaya","1972-08-24","46","31");
INSERT INTO tbl_keluarga VALUES("100","10139","AJI MARGA GUMILAR","L","Mojokerto","1996-11-11","21","1");
INSERT INTO tbl_keluarga VALUES("101","10139","DIMAS MARGA PUTRA","L","Mojokerto","2000-10-14","18","2");
INSERT INTO tbl_keluarga VALUES("102","10139","YUSUF RYZKY ROMADHANI","L","Mojokerto","2006-10-17","12","3");
INSERT INTO tbl_keluarga VALUES("103","10140","SOELISTYOWATI","P","Mojokerto","1971-01-02","47","31");
INSERT INTO tbl_keluarga VALUES("104","10140","KIRANA CAHYA","P","Mojokerto","2018-06-06","0","1");
INSERT INTO tbl_keluarga VALUES("105","10141","NENCE OKTAVIA","P","Serang","1974-10-06","44","31");
INSERT INTO tbl_keluarga VALUES("106","10141","AGHI LEO PRATAMA","L","Serang","1994-08-15","24","1");
INSERT INTO tbl_keluarga VALUES("107","10141","ARYA PERMANA PUTRA","L","Serang","1997-03-27","21","2");
INSERT INTO tbl_keluarga VALUES("108","10141","RANGGA MAULANA SYAHPUTRA","L","Serang","0000-00-00","18","3");
INSERT INTO tbl_keluarga VALUES("109","10142","DIAN MARDIANI","L","Sukabumi","1974-12-20","43","31");
INSERT INTO tbl_keluarga VALUES("110","10142","NURWULANDARI PURNAMASARI","P","Bandung","1996-11-08","21","1");
INSERT INTO tbl_keluarga VALUES("111","10142","SYIFA NURUL FADILLA","L","Bandung","2000-11-01","18","2");
INSERT INTO tbl_keluarga VALUES("112","10142","RACHMAT BUDI RAHARJA","L","BANDUNG","2005-04-11","13","3");
INSERT INTO tbl_keluarga VALUES("113","10143","LINA YANTI","P","Garut","1972-09-23","46","31");
INSERT INTO tbl_keluarga VALUES("114","10143","MUHAMAAD RIFQI MAOLANA","L","Bandung","1996-08-11","22","1");
INSERT INTO tbl_keluarga VALUES("115","10143","DINA RYANA SALSABILA","P","Bandung","2002-03-10","16","2");
INSERT INTO tbl_keluarga VALUES("116","10143","DINI RYANI SALSABILI","P","Bandung","2002-04-20","16","3");
INSERT INTO tbl_keluarga VALUES("117","10144","EULIS SITI KHODIYATUSSOLIHAH","P","Garut","1978-08-20","40","31");
INSERT INTO tbl_keluarga VALUES("118","10144","M. RAFI EKA WARDANI","L","Garut","1999-10-19","19","1");
INSERT INTO tbl_keluarga VALUES("119","10144","SALSABILA NURUL WARDANI","P","Bandung","2003-04-16","15","2");
INSERT INTO tbl_keluarga VALUES("120","10144","NAUFAL MALIK WARDANI","L","Cimahi","2009-05-15","9","3");
INSERT INTO tbl_keluarga VALUES("121","10144","DAFFA AQIL WARDANI","L","Bandung Barat","2017-07-24","1","4");
INSERT INTO tbl_keluarga VALUES("122","10145","DINI SOFIA","P","Purwokerto","1968-11-20","49","31");
INSERT INTO tbl_keluarga VALUES("123","10145","ANGGA BUDIMAN ","L","Jakarta","2001-06-03","17","1");
INSERT INTO tbl_keluarga VALUES("124","10145","TASYA AULIA SUGIRI","P","Jakarta","2004-01-01","14","2");
INSERT INTO tbl_keluarga VALUES("125","10146","DEDE SITI KHOLIFAH","P","Bogor","1976-06-15","42","31");
INSERT INTO tbl_keluarga VALUES("126","10146","RUSLAN ABDULGANI SURAWIJAYA","L","Bogor","1993-04-14","25","1");
INSERT INTO tbl_keluarga VALUES("127","10146","FAHRY HUSAINY PARLINDUNGAN SILALAHI","L","Bogor","2000-05-22","18","2");
INSERT INTO tbl_keluarga VALUES("128","10146","SYAHLA TRYANISYANOV SILALAHI","P","Bogor","2007-11-18","10","3");
INSERT INTO tbl_keluarga VALUES("129","10147","ELIS TITA ROSITA","P","Bandung","1970-08-05","48","31");
INSERT INTO tbl_keluarga VALUES("130","10147","ELLYAS DINAR PARAJASA","L","Bandung","1995-03-24","23","1");
INSERT INTO tbl_keluarga VALUES("131","10147","SHOFIE AULIA NURKHALIZA","P","Purwakarta","2002-07-08","16","2");
INSERT INTO tbl_keluarga VALUES("132","10147","DICKY FAJAR TAZALLY","L","Purwakarta","2005-04-21","13","3");
INSERT INTO tbl_keluarga VALUES("133","10148","LIA HASANAH","P","Subang","1982-08-05","36","31");
INSERT INTO tbl_keluarga VALUES("134","10148","WILDAN YUSUP FADHILAH","L","Subang","2001-10-02","17","1");
INSERT INTO tbl_keluarga VALUES("135","10148","TSANIYAH KHOIROTUN HISAN","P","Subang","2007-07-04","11","2");
INSERT INTO tbl_keluarga VALUES("136","10121","SITI LIANA","P","Tangerang","1982-06-27","36","31");
INSERT INTO tbl_keluarga VALUES("137","10121","ANAS CHAIRUL ELVIANA","P","Cirebon","2005-02-07","13","1");
INSERT INTO tbl_keluarga VALUES("138","10121","ANIS CHAIRUL ELVINA","P","Cirebon","2005-02-07","13","1");
INSERT INTO tbl_keluarga VALUES("139","10121","VANIA CHAIRULINA","P","Cirebon","2006-03-08","12","2");
INSERT INTO tbl_keluarga VALUES("140","10","Erwin Reza Bachtiar","L","Jakarta","0000-00-00","49","28");
INSERT INTO tbl_keluarga VALUES("141","10","Andi Sabrina QB","P","Jakarta","1999-03-02","19","1");
INSERT INTO tbl_keluarga VALUES("142","10","Andi Luthfi G","L","Jakarta","2001-09-14","17","3");
INSERT INTO tbl_keluarga VALUES("143","10","Andi Fauzan DSB","L","Jakarta","2000-03-19","18","2");
INSERT INTO tbl_keluarga VALUES("144","10150","Batara Saut Tampubolon","L","Pematang Siantar","1959-07-01","59","28");
INSERT INTO tbl_keluarga VALUES("145","10150","Hanna Melati P","P","Jakarta","1990-02-13","28","1");
INSERT INTO tbl_keluarga VALUES("146","10150","Kevin Oktavianus H","L","Jakarta","1994-10-24","24","2");
INSERT INTO tbl_keluarga VALUES("147","9","Yeni Handayani","P","Serang","1965-10-07","53","31");
INSERT INTO tbl_keluarga VALUES("148","9","Amalia A","P","Tangerang","1994-09-20","24","1");
INSERT INTO tbl_keluarga VALUES("149","9","Qaedy Giats","L","Tangerang","1997-02-21","21","2");
INSERT INTO tbl_keluarga VALUES("150","10004","Gery Adhiyoka","L","Yogyakarta","1988-11-01","30","28");
INSERT INTO tbl_keluarga VALUES("151","10008","Tiara Rahmi Nurhalida","P","Surabaya","1976-06-28","42","31");
INSERT INTO tbl_keluarga VALUES("152","10008","Haekal Muhamamad E","L","Tangerang","2002-02-12","16","1");
INSERT INTO tbl_keluarga VALUES("153","10008","Meutia NN","P","Tangerang","2004-05-19","14","2");
INSERT INTO tbl_keluarga VALUES("154","10009","Susi Herawati","P","Bogor","1980-01-25","38","31");
INSERT INTO tbl_keluarga VALUES("155","10009","Bhimo Nugroho FW","L","Jakarta","2002-12-21","15","1");
INSERT INTO tbl_keluarga VALUES("156","10009","Azzahra DW","P","Jakarta","2006-05-22","12","2");
INSERT INTO tbl_keluarga VALUES("157","10009","Azzyya Tribuana NW","P","Bekasi","2010-01-25","8","3");
INSERT INTO tbl_keluarga VALUES("158","6","Maria Saryani","P","Karang Anyar","1970-03-01","48","31");
INSERT INTO tbl_keluarga VALUES("159","6","Naufal Lutfi lazuardi","L","Bandung","1997-10-27","21","1");
INSERT INTO tbl_keluarga VALUES("160","6","Salma Aulia Y","L","Bandung","2002-06-10","16","2");
INSERT INTO tbl_keluarga VALUES("161","6","Abbiya Syifa A","P","Jakarta","2004-06-30","14","3");
INSERT INTO tbl_keluarga VALUES("162","10010","Nur Laily","P","Sampang","1989-11-28","28","31");
INSERT INTO tbl_keluarga VALUES("163","10010","Ayana Salsabila Ashadewi","P","Jakarta","2014-01-22","4","1");
INSERT INTO tbl_keluarga VALUES("164","10010","Alana Salsabila A","P","Jakarta","2014-01-22","4","2");
INSERT INTO tbl_keluarga VALUES("165","10092","Catherina Benedicta B","P","Jakarta","2002-11-03","16","1");
INSERT INTO tbl_keluarga VALUES("166","10092","Clorinda Adeline B","P","Cibinong","2011-07-15","7","2");
INSERT INTO tbl_keluarga VALUES("167","10172","Putri Rahmawati H","P","Lamongan","0000-00-00","33","31");
INSERT INTO tbl_keluarga VALUES("168","10172","Rezvan Atharizz H","L","Depok","2012-06-22","6","1");
INSERT INTO tbl_keluarga VALUES("169","10172","Darrel Alaric H","L","Depok","2014-04-03","4","2");
INSERT INTO tbl_keluarga VALUES("170","10172","Nadine Quinzha H","P","Depok","2015-08-17","3","3");
INSERT INTO tbl_keluarga VALUES("171","10015","Indratiawarman, SE","L","Bukit Tinggi","1962-11-24","56","28");
INSERT INTO tbl_keluarga VALUES("172","10015","Inka Indratika P","P","Jakarta","1993-08-10","25","1");
INSERT INTO tbl_keluarga VALUES("173","10015","Okta  Indratika  P","L","Jakarta","0000-00-00","23","2");
INSERT INTO tbl_keluarga VALUES("174","10015","Kania Novindra P","P","Jakarta","1999-11-06","19","3");
INSERT INTO tbl_keluarga VALUES("175","10149","Irma Yulia","P","Bandung","1972-07-23","46","31");
INSERT INTO tbl_keluarga VALUES("176","10149","Emir Hamzah A","L","Bandung","2000-02-01","18","1");
INSERT INTO tbl_keluarga VALUES("177","10149","Amer  Sidiq M","L","Bandung","2003-10-15","15","2");
INSERT INTO tbl_keluarga VALUES("178","10042","Sonya Marhayati","P","Tasikmalaya","1983-06-11","35","31");
INSERT INTO tbl_keluarga VALUES("179","10042","Lizahra Puspita N","P","Tasikmalaya","2001-11-26","17","1");
INSERT INTO tbl_keluarga VALUES("180","10042","Farel Danish SN","L","Jakarta","2007-01-29","11","2");
INSERT INTO tbl_keluarga VALUES("181","10042","Adeeva Fathina A","P","Jakarta","2018-12-12","0","3");
INSERT INTO tbl_keluarga VALUES("182","10075","Saraswati","P","Jakarta","1992-03-10","26","31");
INSERT INTO tbl_keluarga VALUES("183","10075","Pradipta Arswa B","L","Bekasi","2016-01-26","2","1");
INSERT INTO tbl_keluarga VALUES("184","10075","Mahesa Arswa A","L","Bekasi","2017-03-16","1","2");
INSERT INTO tbl_keluarga VALUES("186","10093","Ida Aida","P","Bekasi","1969-12-10","48","31");
INSERT INTO tbl_keluarga VALUES("187","10093","Alya Ammar","P","Bekasi","1999-04-10","19","1");
INSERT INTO tbl_keluarga VALUES("188","10093","Raihana Fitri","P","Jakarta","2001-12-16","16","2");
INSERT INTO tbl_keluarga VALUES("189","10093","Azma Fariza","P","Bekasi","2010-01-16","8","3");
INSERT INTO tbl_keluarga VALUES("190","10081","Desiariani Masan","P","Jakarta","1987-12-30","30","31");
INSERT INTO tbl_keluarga VALUES("191","10081","Talitha Nayla Pahlevi","P","Jakarta","2011-08-03","7","1");
INSERT INTO tbl_keluarga VALUES("192","10081","Aisyah Azzahra Pahlevi","P","Jakarta","2016-09-22","2","2");
INSERT INTO tbl_keluarga VALUES("193","10179","Raisa Andriana","P","Bandung","1990-06-06","28","33");
INSERT INTO tbl_keluarga VALUES("194","10082","Dini Hira A","P","Jakarta","1971-05-26","47","31");
INSERT INTO tbl_keluarga VALUES("195","10082","Alvin Rizqi Adhipradana","L","Jakarta","1998-09-14","20","1");
INSERT INTO tbl_keluarga VALUES("196","10082","Aldi Maheswara W","L","Jakarta","2001-01-30","17","2");
INSERT INTO tbl_keluarga VALUES("197","10089","Ida Susanti","P","Tulung Agung","1973-08-20","45","31");
INSERT INTO tbl_keluarga VALUES("198","10089","Meifany Wanda P","P","Mojokerto","2002-05-17","16","1");
INSERT INTO tbl_keluarga VALUES("199","10089","Alvin Ilham P","L","Mojokerto","2004-05-10","14","2");
INSERT INTO tbl_keluarga VALUES("200","7","Dea Nurul Azizah","P","Bandung","1988-10-20","30","31");
INSERT INTO tbl_keluarga VALUES("201","7","Galadriel Lamia Ramdhani","P","Jakarta","2015-02-23","3","1");
INSERT INTO tbl_keluarga VALUES("202","10017","Soesie Noesarnemia Wahyuni","P","Jakarta","1971-05-09","47","31");
INSERT INTO tbl_keluarga VALUES("203","10017","Saarah Putri Karina Prayitno","P","Bandung","2000-10-30","18","1");
INSERT INTO tbl_keluarga VALUES("205","10017","Sabrina Putri Sekar P.","P","Bandung","2010-05-11","8","2");
INSERT INTO tbl_keluarga VALUES("206","10072","Fadhil Muhammad Fajri","L","Bandung","1994-11-25","24","19");
INSERT INTO tbl_keluarga VALUES("207","10072","Nur Hafidzah Devayani","P","Bandung","2000-08-05","18","20");
INSERT INTO tbl_keluarga VALUES("208","10072","Nur Hafidzah Deviyana","P","Bandung","2000-08-05","18","21");
INSERT INTO tbl_keluarga VALUES("209","10113","Nur Ariyadi","L","Purbalingga","1974-10-29","44","28");
INSERT INTO tbl_keluarga VALUES("210","10101","Mohammad Ikmal Lubis","L","Jakarta","1996-07-14","22","1");
INSERT INTO tbl_keluarga VALUES("211","10101","Muhammad Ikmal Lubis","L","Jakarta","1997-07-25","21","2");
INSERT INTO tbl_keluarga VALUES("212","10153","Gita Puspita Sari","P","Tasikmalaya","1985-08-24","33","31");
INSERT INTO tbl_keluarga VALUES("213","10153","Fvian Adhyasta Fauzi","L","Bogor","2013-08-05","5","1");
INSERT INTO tbl_keluarga VALUES("214","10087","Lisa Dwi Hapsari","P","Pasuruan","1988-03-19","30","31");
INSERT INTO tbl_keluarga VALUES("215","10087","\'Aliy Rahman","L","Malang","2015-04-25","3","1");
INSERT INTO tbl_keluarga VALUES("217","10087","Hana Khalilurrahman","P","Malang","2016-08-29","2","2");
INSERT INTO tbl_keluarga VALUES("219","2","Reynaldi Hermansyah","L","Jakarta","1967-05-16","51","10");
INSERT INTO tbl_keluarga VALUES("220","2","Verdi Hermansyah","L","Cirebon","0000-00-00","49","11");
INSERT INTO tbl_keluarga VALUES("224","10021","Muhammad Reihan Ardiansyah","L","Jakarta","2005-01-11","13","1");
INSERT INTO tbl_keluarga VALUES("226","10021","Amanda Ramadhani","P","Bekasi","2009-09-09","9","2");
INSERT INTO tbl_keluarga VALUES("227","10014","Almira Zahwa Luthfi","P","Cirebon","2013-02-26","5","2");
INSERT INTO tbl_keluarga VALUES("228","10052","Chaerunnisa","P","Jakarta","2005-06-27","13","1");
INSERT INTO tbl_keluarga VALUES("229","10052","Noval Andika Putra Prabowo","L","Jakarta","2018-11-03","0","2");
INSERT INTO tbl_keluarga VALUES("231","10181","Agung Mardiyanto","L","Pati","1988-03-02","30","28");
INSERT INTO tbl_keluarga VALUES("232","10181","Arjuno Putra Agtia","L","Surakarta","2015-08-22","3","1");
INSERT INTO tbl_keluarga VALUES("233","10181","Anjani Putri Agtia","P","Solo","2018-01-18","0","2");
INSERT INTO tbl_keluarga VALUES("234","10182","Adikarsa Sudanar ","L","Jakarta","1986-10-04","32","28");
INSERT INTO tbl_keluarga VALUES("235","10182","Chelsea Alizia Putri","P","Depok","2013-01-17","5","1");
INSERT INTO tbl_keluarga VALUES("236","10182","Diego Aliandra Putra","L","Depok","2017-04-05","1","2");
INSERT INTO tbl_keluarga VALUES("237","10013","Anella Tanawidjaya","P","Jakarta","1985-09-23","33","31");
INSERT INTO tbl_keluarga VALUES("238","10013","Sebastian Widyajaya","L","Jakarta","2006-06-06","12","1");
INSERT INTO tbl_keluarga VALUES("239","10013","Vincent Widyajaya","L","Tangerang","2010-01-12","8","1");
INSERT INTO tbl_keluarga VALUES("240","10013","William Pamungkas Widyajaya","L","Tangerang","2018-07-24","0","3");
INSERT INTO tbl_keluarga VALUES("242","10157","Yuliamita Ariestin","P","Sumenep","1992-05-08","26","31");
INSERT INTO tbl_keluarga VALUES("243","10086","Lowig Caesar Sudhana Peter","L","Surabaya","1996-03-27","22","19");
INSERT INTO tbl_keluarga VALUES("246","10018","Nurmalasari","P","Jakarta","1983-04-01","35","31");
INSERT INTO tbl_keluarga VALUES("248","10018","Nisya Salsabila Fitri","P","Bogor","2018-06-23","0","1");
INSERT INTO tbl_keluarga VALUES("249","10168","Nabiilah Amatullah","P","Surabaya","1998-04-21","20","31");
INSERT INTO tbl_keluarga VALUES("250","10159","Ibnu Susetyodo","L","Jakarta","1988-10-22","30","28");
INSERT INTO tbl_keluarga VALUES("251","10159","Kanaya Salsabila","P","Jakarta","2015-03-17","3","1");
INSERT INTO tbl_keluarga VALUES("252","10159","Athaya Syacia","P","Bogor","2016-07-08","2","2");
INSERT INTO tbl_keluarga VALUES("253","10001","Indriyanti","P","Bandung","1977-03-05","41","31");
INSERT INTO tbl_keluarga VALUES("254","10001","Agis Ladera Puteri Rinaldhi","P","Bandung","2018-12-25","0","1");
INSERT INTO tbl_keluarga VALUES("255","10001","Aghniya Fathaniah Puteri Rinaldhi","P","Bandung","2018-01-06","0","1");
INSERT INTO tbl_keluarga VALUES("256","10110","Nurlydianna","P","Cirebon","1985-02-09","33","31");
INSERT INTO tbl_keluarga VALUES("257","10110","Salma Aisy Syahbana","P","Cirebon","2009-08-03","9","1");
INSERT INTO tbl_keluarga VALUES("258","10110","Fikri Natansyah Qolbi","L","Cirebon","2013-05-31","5","1");
INSERT INTO tbl_keluarga VALUES("259","10014","Dinar Meilani","P","Indramayu","1984-05-30","34","31");
INSERT INTO tbl_keluarga VALUES("260","10070","Galih Dorodjatun Diadi","L","Bogor","1994-10-01","24","19");
INSERT INTO tbl_keluarga VALUES("261","10070","Airlangga Auliarachman Diadi","L","Bogor","1997-09-09","21","20");
INSERT INTO tbl_keluarga VALUES("262","10070","Tuti Alawiyah","P","Bogor","1992-01-07","26","31");
INSERT INTO tbl_keluarga VALUES("263","10074","Yusrini Siburian","P","Medan","1987-10-12","31","10");
INSERT INTO tbl_keluarga VALUES("264","10074","Yosi Enola Siburian","P","Medan","1992-01-22","26","19");
INSERT INTO tbl_keluarga VALUES("265","10074","Abram Yosua Siburian","L","Medan","1998-04-06","20","20");
INSERT INTO tbl_keluarga VALUES("269","10122","FARREL ALIF AL HAFIDZ","L","CIREBON","2005-04-13","13","1");
INSERT INTO tbl_keluarga VALUES("270","10122","FARRIS SEPTIAN AL MAHRI","L","CIREBON","2006-09-02","12","1");
INSERT INTO tbl_keluarga VALUES("271","10122","FARRID AGUSTI SANDI","L","CIREBON","2009-08-02","9","3");
INSERT INTO tbl_keluarga VALUES("272","10125","DIVA RIZKA RESTIANA","P","CIREBON  ","2003-10-07","15","1");
INSERT INTO tbl_keluarga VALUES("273","10125","ADRIAN PRADIFTA RAJENDRA","L","CIREBON  ","2015-11-29","3","2");
INSERT INTO tbl_keluarga VALUES("275","10111","Jamila","P","Cirebon","1977-04-16","41","31");
INSERT INTO tbl_keluarga VALUES("276","10111","Ine Salsabillah","P","Cirebon","2003-09-05","15","1");
INSERT INTO tbl_keluarga VALUES("277","10111","Davina Prima Nathania","P","Cirebon","2008-11-26","10","2");
INSERT INTO tbl_keluarga VALUES("278","10135","Rauf Whmad","L","Medan","0000-00-00","48","28");
INSERT INTO tbl_keluarga VALUES("279","10135","Ahmad Harry Wibowo","L","Medan","0000-00-00","0","1");
INSERT INTO tbl_keluarga VALUES("280","10135","Miskah Chairani","P","Medan","0000-00-00","0","2");
INSERT INTO tbl_keluarga VALUES("283","10135","Annisa Yusmaniah","P","Medan","2001-03-22","17","3");
INSERT INTO tbl_keluarga VALUES("284","10109","Raden ayu nasya annisa rachman","P","Cirebon","0000-00-00","0","1");
INSERT INTO tbl_keluarga VALUES("285","10109","Raden muhammad rafael arrachman","L","Cirebon","2018-12-09","0","2");
INSERT INTO tbl_keluarga VALUES("286","10109","Raden ayu valery titania rachman","P","Cirebon","2018-12-23","0","3");
INSERT INTO tbl_keluarga VALUES("287","10067","ADITYA PERMANA PUTRA","L","SURABAYA","1990-07-10","28","10");
INSERT INTO tbl_keluarga VALUES("288","10067","ANDI PRABOWO S","L","DENPASAR","1996-11-14","22","19");
INSERT INTO tbl_keluarga VALUES("291","10083","Kurnia Widyaningsih","P","Jakarta","1989-06-06","29","31");
INSERT INTO tbl_keluarga VALUES("292","10020","Dewi Sartika","P","Jakarta","1978-07-28","40","31");
INSERT INTO tbl_keluarga VALUES("293","10020","M. Rafli","L","Bekasi","2000-11-07","18","1");
INSERT INTO tbl_keluarga VALUES("294","10020","Ananda Alisiya Bilqis","P","Bekasi","2017-01-03","1","1");
INSERT INTO tbl_keluarga VALUES("295","10112","Ningsih Sudarsih","P","Jakarta","1974-09-15","44","31");
INSERT INTO tbl_keluarga VALUES("296","10112","Dini Syafitri","P","Jakarta","2000-12-29","17","1");
INSERT INTO tbl_keluarga VALUES("298","10043","Resy Alifiyanti Suprapto","P","Surabaya","1992-09-18","26","1");
INSERT INTO tbl_keluarga VALUES("299","10043","ADIBTYA AUGUST FARABI ","L","SIDOARJO","2001-10-06","17","19");
INSERT INTO tbl_keluarga VALUES("300","10112","Nadya Okta Pasha","P","Batang","2003-10-22","15","2");
INSERT INTO tbl_keluarga VALUES("301","10033","Mohamad Habibi","L","Cirebon","1986-01-05","32","28");
INSERT INTO tbl_keluarga VALUES("302","10091","TANIA INTAN SARI","P","SERANG","1994-03-02","24","1");
INSERT INTO tbl_keluarga VALUES("303","10044","Abdurrahman","L","Kupang ","1993-12-30","24","1");
INSERT INTO tbl_keluarga VALUES("304","10091","MUHAMMAD ARI PALAPA","L","SERANG","1996-05-16","22","2");
INSERT INTO tbl_keluarga VALUES("305","10091","MUHAMMAD ZAQI RAIHAN","L","SERANG","2000-09-12","18","3");
INSERT INTO tbl_keluarga VALUES("306","10044","Nurrahmi Fadillah","P","Kupang","0000-00-00","48","19");
INSERT INTO tbl_keluarga VALUES("307","10091","AYUTIA YASMIN","P","CIREBON","2003-10-24","15","1");
INSERT INTO tbl_keluarga VALUES("308","10044","Agustri Alif","L","Kupang","1998-08-21","20","20");
INSERT INTO tbl_keluarga VALUES("309","10098","Sahila Qonita","P","Jakarta","1996-07-29","22","19");
INSERT INTO tbl_keluarga VALUES("310","10098","Shafa Salsabila","P","Jakarta","2003-02-13","15","20");
INSERT INTO tbl_keluarga VALUES("311","10108","Silfi Alfita","P","Malang","1989-01-18","29","31");
INSERT INTO tbl_keluarga VALUES("312","10108","Nawaf Sufi Alfatir","L","Malang","2017-03-30","1","1");
INSERT INTO tbl_keluarga VALUES("313","10064","Alzam Tsaqib Tradhava","L","Jakarta","2018-01-16","0","1");
INSERT INTO tbl_keluarga VALUES("314","10076","Muhammad Iqbal","L","Jakarta","0000-00-00","0","10");
INSERT INTO tbl_keluarga VALUES("316","10157","Mohammad Arsya Al Ghifari","L","Sumenep","2018-11-02","0","1");
INSERT INTO tbl_keluarga VALUES("317","10061","Moch. Haekal Farauq","L","Bandung","1980-09-04","38","28");
INSERT INTO tbl_keluarga VALUES("318","10061","Syifa Saphira Rabbani","P","Sumedang","2000-10-10","18","1");
INSERT INTO tbl_keluarga VALUES("319","10061","Rafi Muhammad Warits","L","Sumedang","2002-03-20","16","2");
INSERT INTO tbl_keluarga VALUES("320","10016","M.AGUS SUNARDI","L","Medan","0000-00-00","0","1");
INSERT INTO tbl_keluarga VALUES("321","10051","Nenden Darmawati","P","","0000-00-00","0","31");
INSERT INTO tbl_keluarga VALUES("322","10032","Taufik Hidayat, ST","L","Jakarta","1978-07-19","40","28");
INSERT INTO tbl_keluarga VALUES("323","10032","Damian Jonathan Farrel","L","Cirebon","2008-10-16","10","1");
INSERT INTO tbl_keluarga VALUES("327","10160","Melysa sandra lesmana","P","Surabaya","1989-05-06","29","1");
INSERT INTO tbl_keluarga VALUES("328","10183","SUNDARI","P","BANDUNG","1974-11-08","44","31");
INSERT INTO tbl_keluarga VALUES("329","10183","DELLA IRIS WIDYANDARI","P","BANDUNG","2002-06-23","16","1");
INSERT INTO tbl_keluarga VALUES("330","10183","NAUFAL NAFIZ FATHURRAHMAN","L","BANDUNG","2007-05-13","11","2");
INSERT INTO tbl_keluarga VALUES("332","10035","Tuti Widya Wiyanti","P","Cirebon","1985-01-10","33","31");
INSERT INTO tbl_keluarga VALUES("333","10035","Fahri Aditya Putra","L","Cirebon","2015-08-14","3","1");
INSERT INTO tbl_keluarga VALUES("334","10055","AGUS SETIYAWAN","L","KLATEN","1981-08-19","37","28");
INSERT INTO tbl_keluarga VALUES("335","10055","SRIPURWANINGSIH","P","WONOGIRI","1984-12-15","33","31");
INSERT INTO tbl_keluarga VALUES("336","10035","Irgi Adtya Putra","L","Cirebon","2018-04-26","0","2");
INSERT INTO tbl_keluarga VALUES("337","10055","MAYSA VADENA PUTRA ADIPURA","L","KLATEN","2005-05-05","13","1");
INSERT INTO tbl_keluarga VALUES("338","10055","AZZALEA KHALIQA DZAHIN","P","KLATEN","2011-07-20","7","2");
INSERT INTO tbl_keluarga VALUES("341","10069","Dewi Larassati","P","Jakarta","1994-01-13","24","1");
INSERT INTO tbl_keluarga VALUES("342","10069","Dewi Sarassati","P","Jakarta","1994-01-13","24","2");
INSERT INTO tbl_keluarga VALUES("343","10155","Rintan Kumalasari","P","Lumajang","1998-10-08","20","19");
INSERT INTO tbl_keluarga VALUES("344","10104","HANIA MILLATI PUTRI","P","CIREBON","2012-03-26","6","3");
INSERT INTO tbl_keluarga VALUES("346","10080","Hafidhatul Fathany","P","Sidoarjo","2001-04-02","17","19");
INSERT INTO tbl_keluarga VALUES("347","10080","Fathur Rizky Febriansyah","L","Sidoarjo","2005-02-04","13","20");
INSERT INTO tbl_keluarga VALUES("348","10090","Siti Zenab Kurnia","P","Purwakarta","1995-07-24","23","31");
INSERT INTO tbl_keluarga VALUES("352","10158","Dewi Aprilia Yulianti","P","Mojokerto","2008-04-04","10","19");
INSERT INTO tbl_keluarga VALUES("353","10158","Indra Pranaja Arafif","L","Kediri","2016-03-12","2","20");



DROP TABLE tbl_keterangan_presensi;

CREATE TABLE `tbl_keterangan_presensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_presensi` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `divisi` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_klasifikasi;

CREATE TABLE `tbl_klasifikasi` (
  `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_klasifikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_kontrak;

CREATE TABLE `tbl_kontrak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO tbl_kontrak VALUES("7","10012","2018-09-06","2018-09-28","","2","habis");
INSERT INTO tbl_kontrak VALUES("13","10073","2018-06-04","2019-05-12","","29","habis");
INSERT INTO tbl_kontrak VALUES("14","10072","0000-00-00","0000-00-00","3088-JMP-207Aa.jpg","","habis");
INSERT INTO tbl_kontrak VALUES("18","10026","2018-10-04","2018-11-02","","0","habis");
INSERT INTO tbl_kontrak VALUES("20","10","2018-01-02","0000-00-00","","","habis");
INSERT INTO tbl_kontrak VALUES("21","10044","2018-08-01","2019-07-31","","","");
INSERT INTO tbl_kontrak VALUES("22","10043","2018-04-02","2019-03-31","","","");
INSERT INTO tbl_kontrak VALUES("23","10049","2017-11-04","2018-11-30","","","habis");
INSERT INTO tbl_kontrak VALUES("24","10048","2018-08-01","2019-07-31","","","");
INSERT INTO tbl_kontrak VALUES("25","10050","2017-12-04","2018-11-30","","","habis");
INSERT INTO tbl_kontrak VALUES("26","10058","2018-11-01","2019-04-30","","","");
INSERT INTO tbl_kontrak VALUES("27","10062","2018-06-04","2019-05-31","","","");
INSERT INTO tbl_kontrak VALUES("29","10060","2017-12-04","2018-11-30","","","habis");
INSERT INTO tbl_kontrak VALUES("30","10065","2018-01-02","2018-12-31","","28","habis");
INSERT INTO tbl_kontrak VALUES("31","10065","2018-01-02","2018-12-31","","0","habis");
INSERT INTO tbl_kontrak VALUES("32","10064","2018-01-02","2018-12-31","","28","habis");
INSERT INTO tbl_kontrak VALUES("33","10064","2018-01-02","2018-12-31","","0","habis");
INSERT INTO tbl_kontrak VALUES("34","10067","2018-07-02","2019-06-02","","","");
INSERT INTO tbl_kontrak VALUES("35","10069","2018-11-01","2019-04-30","","","");
INSERT INTO tbl_kontrak VALUES("36","10075","2018-07-04","2019-06-30","","","");
INSERT INTO tbl_kontrak VALUES("37","10169","2018-07-02","2018-12-31","","0","habis");
INSERT INTO tbl_kontrak VALUES("38","4","2018-06-04","2019-05-31","","","");
INSERT INTO tbl_kontrak VALUES("39","10070","2018-06-04","2019-05-31","","","");
INSERT INTO tbl_kontrak VALUES("40","10074","2018-06-04","2019-05-31","","","");
INSERT INTO tbl_kontrak VALUES("41","2","2018-06-04","2019-05-31","","","");
INSERT INTO tbl_kontrak VALUES("42","10076","2018-06-04","2019-05-31","","","");
INSERT INTO tbl_kontrak VALUES("43","10081","2018-07-02","2019-06-30","","","");
INSERT INTO tbl_kontrak VALUES("44","10080","2018-06-02","2018-12-31","","0","habis");
INSERT INTO tbl_kontrak VALUES("45","10089","2018-08-01","2018-12-31","","0","habis");
INSERT INTO tbl_kontrak VALUES("46","10082","2018-05-02","2019-04-30","","","");
INSERT INTO tbl_kontrak VALUES("47","10083","2018-05-02","2019-04-30","","","");
INSERT INTO tbl_kontrak VALUES("48","10099","2018-10-01","2019-09-30","","","");
INSERT INTO tbl_kontrak VALUES("49","10153","2018-07-02","2019-06-02","","","");
INSERT INTO tbl_kontrak VALUES("50","10154","2018-07-02","2019-06-30","","","");
INSERT INTO tbl_kontrak VALUES("51","10155","2018-11-01","2019-04-30","","","");
INSERT INTO tbl_kontrak VALUES("52","10157","2018-11-01","2019-10-31","","","");
INSERT INTO tbl_kontrak VALUES("53","10170","2018-11-01","2019-10-31","","","");
INSERT INTO tbl_kontrak VALUES("54","10100","2018-08-01","2018-10-31","","","habis");
INSERT INTO tbl_kontrak VALUES("55","10158","0000-00-00","2018-07-31","","","habis");
INSERT INTO tbl_kontrak VALUES("56","10160","2018-11-01","2018-04-30","","","habis");
INSERT INTO tbl_kontrak VALUES("57","10159","2018-08-01","2018-10-31","","","habis");



DROP TABLE tbl_kpts;

CREATE TABLE `tbl_kpts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_surat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_lembur;

CREATE TABLE `tbl_lembur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_presensi` int(25) NOT NULL,
  `id_user` int(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `jam_awal` varchar(255) NOT NULL,
  `jam_akhir` varchar(255) NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `divisi` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_lembur VALUES("1","1","4","2018-12-18","tes","17.00","21.00","1","1","2");
INSERT INTO tbl_lembur VALUES("3","1","4","2018-12-15","dd","17.00","22.00","1","0","2");
INSERT INTO tbl_lembur VALUES("4","1","4","2018-12-31","dd","19.00","23.00","0","0","2");



DROP TABLE tbl_notif_kontrak;

CREATE TABLE `tbl_notif_kontrak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_organisasi;

CREATE TABLE `tbl_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO tbl_organisasi VALUES("1","10012","qweqwe","qweqweqweqweqwe","2018-09-19","2018-09-27","123123");
INSERT INTO tbl_organisasi VALUES("2","10172","MD3-DAKWAH","Staf Acara","0000-00-00","0000-00-00","");
INSERT INTO tbl_organisasi VALUES("3","10001","SKJM","Ketua DPC","2011-06-01","2014-07-16","");
INSERT INTO tbl_organisasi VALUES("4","10001","Koperasi JMB Palikanci","Sekretaris","2007-03-12","2011-04-21","");
INSERT INTO tbl_organisasi VALUES("5","10135","JMP","Superpasior","2018-10-01","0000-00-00","");
INSERT INTO tbl_organisasi VALUES("6","10106","SKJM","KABID.KESRA","0000-00-00","2018-09-28","");
INSERT INTO tbl_organisasi VALUES("7","10160","UKM FIDUCIA","Anggota","2014-02-12","2015-05-20","");
INSERT INTO tbl_organisasi VALUES("8","10158","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_organisasi VALUES("9","10139","SERIKAT KARYAWAN JASA MARGA","LITBANG","2016-07-04","2018-09-30","");



DROP TABLE tbl_pendidikan;

CREATE TABLE `tbl_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(25) NOT NULL,
  `jenis` varchar(3) NOT NULL,
  `tingkat` int(10) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `lulus` int(255) NOT NULL,
  `no_serti` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=400 DEFAULT CHARSET=latin1;

INSERT INTO tbl_pendidikan VALUES("1","10012","1","1","SD Ringinanom","","1971","XIII.Aa 164603","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("2","10012","2","0","","","0","","Komunikasi Yang efektif","1995-01-31","1995-01-31","Jakarta");
INSERT INTO tbl_pendidikan VALUES("5","10012","2","0","","","1977","XIII.Aa 164603","Pelatihan SIM-SDM (biaya gratis,paket kontrak)","1997-03-26","1997-03-28","Bandung");
INSERT INTO tbl_pendidikan VALUES("20","10012","1","2","SMPN 4 Nganjuk","","1981","04.OB.0545324","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("21","10012","2","0","","","0","","KURSUS KOMPUTER TINGKAT PROGRAMER (IN-HOUSE)","1998-03-12","1998-11-12","Jakarta");
INSERT INTO tbl_pendidikan VALUES("24","10012","1","3","SPK Tangerang","","1985","NO.014264","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("25","10012","1","4","STMIK Budi Luhur Jakarta","Manajemen Informatika","1997","5225000030/MI/1997","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("26","10012","2","0","","","0","","Manaj.Pelayanan Prima Angk.10 Jakarta- Tangerang","1998-03-24","1998-03-26","Tangerang");
INSERT INTO tbl_pendidikan VALUES("27","10012","2","0","","","0","","Dbase III dan Programing","2018-09-21","2018-10-02","Jakarta");
INSERT INTO tbl_pendidikan VALUES("28","10012","2","0","","","0","","Kursus Komputer Tingkat Programer (inhouse)","1998-12-03","1998-12-11","Jakarta");
INSERT INTO tbl_pendidikan VALUES("29","10012","2","0","","","0","","Pelatihan Analisa Pekerjaan Berwawasan K3","1999-05-03","1999-05-04","10a");
INSERT INTO tbl_pendidikan VALUES("30","10012","2","0","","","0","","Pelatihan Samtek Angk.VI","2000-11-20","2000-11-22","Bogor");
INSERT INTO tbl_pendidikan VALUES("31","10012","2","0","","","0","","Pelatihan Komputer Microsoft Access (Basic)","2003-08-11","2003-08-15","Bogor");
INSERT INTO tbl_pendidikan VALUES("32","10012","2","0","","","0","","Pelatihan Administrasi Kesehatan","2003-12-08","2003-12-12","Bogor");
INSERT INTO tbl_pendidikan VALUES("33","10012","2","0","","","0","","Workshop Profesional Secretaryp.I angk.06","2007-04-19","2007-04-20","Jakarta");
INSERT INTO tbl_pendidikan VALUES("35","10012","2","0","","","0","","Pelatihan Giving Optimal Services","2007-04-24","2007-04-26","Jakarta");
INSERT INTO tbl_pendidikan VALUES("36","10","1","4","Bergische Universitaet Gesamthochschule Wupppertal, Germany","Interior Architecture","3","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("38","10003","1","2","SMPN 68 Jakarta","","3","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("39","10003","1","3","SMAN 34 Jakarta","","3","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("40","10003","1","4","Universitas Gajah Mada","Teknik Arsitektur","4","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("41","10004","1","1","SD Muhamadiyah ","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("42","10004","1","2","SMP 8 Yogyakarta","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("43","10004","1","3","SMAN 8 Yogyakarta","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("44","10004","1","4","Universitas Gajah Mada","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("45","10008","1","4","Universitas Trisaksti","Teknik Lingkungan","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("46","10009","1","4","Universitas Gunadarma","Akutansi","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("47","10009","1","5","STIE IPWI Jakarta","Pemasaran","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("48","6","1","4","ST. Sain & Teknologi Indonesia","Teknik Informatika","1997","1337.97.11","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("49","10010","1","4","Institut Teknologi Bandung ","Marketing","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("50","10011","1","4","Institut Teknologi Bandung ","Teknik Sipil","2014","150044/I1.A/PP/X/IJZ/1/2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("51","10092","1","4","STIA LAN","Manajemen Ekonomi Publik","2010","E.I.1110","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("52","10092","1","5","STIE IPWI Jakarta","Manajemen Strategik","2015","MG.201503460045","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("53","10172","1","4","Universitas Indonesia","Akutansi","2008","0071/S1-FE/Ekst/2/2008","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("54","10172","2","0","","","0","","Sosialisasi Tax Amnesty PT Jasa Marga Properti","2016-08-24","2016-08-24","Jakarta");
INSERT INTO tbl_pendidikan VALUES("55","10015","1","4","STIE Gotong Royong","Manajemen","2004","GR WN 191082340636","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("56","10149","1","4","STIE INABA Bandung","Akutansi","2007","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("57","10060","1","3","SMA 106 jAKARTA","","2010","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("58","10037","1","4","Universitas Gunadarma","Akutansi","2011","0331/S1-FE/P.II-13/2011","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("59","10034","1","4","Institut Pertanian Bogor","Management Agribisnis","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("60","10039","1","3","SMK JAKARTA","Administrasi","2013","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("61","10038","1","4","Akdm. BSI","Pemrograman Bisnis","2014","AMIKBSI 0116095","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("62","10042","1","3","STM MUHAMADIYAH 2 JUMOYO","Sipil","1995","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("63","10040","1","4","ABFI Institute Perbanas Jakarta","Akutansi","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("64","10044","1","4","Universitas Sriwijaya","Sipil","2015","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("65","10043","1","1","SDN TROSOBO III","","2004","DN-05 Dd 0095803","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("66","10043","1","2","SMPN 2 TAMAN","","2007","DN-05 DI 0605482","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("67","10049","1","3","SMA BUDI UTOMO","","2008","DN-02Mk0079540","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("68","10050","1","3","SMKN 59 Jakarta","Multimedia","2013","DN-01 Mk0034857","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("69","10058","1","4","Universitas Gunadarma","Sipil","2006","0004/S1-TS/P.II-75/2010","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("70","10060","1","7","Politeknik Negeri Jakarta","Business Administration","2013","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("71","10060","1","4","Politeknik Negeri Jakarta","Business Administration","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("72","10067","1","4","Politeknik Negeri Bali","Akutansi","2015","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("74","10075","1","4","Binus University","Animation","2013","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("75","10169","1","4","Universitas Islam Nusantara Bandung","FIPJPLS","2003","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("76","4","1","4","Telkom University","Electrical Engineering","2017","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("78","10072","1","4","Universitas Sriwijaya","Sipil","2013","090733-03-2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("79","10072","1","5","Institut Teknologi Bandung ","Manajemen dan Rekayasa Konstruksi, Program Studi Teknik Sipil","2017","250003/I1.A/PP/X/IJZ/2/2017","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("80","10073","1","4","Universitas Lampung","Sipil","2017","03577/38.5.S1/2017","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("81","10074","1","4","Universitas Sumatera Utara","Teknik Elektro","2015","2133/UN5.2.1.4/LLS/S-1/Ekst/2015","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("82","10076","1","4","Universitas Gunadarma","Information System","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("83","10060","1","7","Politeknik Negeri Jakarta","Business Administration","2013","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("84","7","1","4","Insitut Teknologi Bandung","Marketing","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("86","10093","1","4","Universitas Krisnadwipayana","Teknik Elektro","2006","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("87","10081","1","4","Universitas Gunadarma","Akutansi","2009","0379/S1-AK/P II-09/2009","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("88","10081","1","5","Universitas Gunadarma","Perbankan","2016","099/MM/MKB/2016","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("90","10179","1","4","Insitut Teknologi Bandung","Teknik Industri","2002","666/ITB/666-VII/2018","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("91","10179","2","0","","","0","","Pelatihan Komputer","2018-12-11","2018-12-27","Jakarta");
INSERT INTO tbl_pendidikan VALUES("92","10082","1","4","STIE PERBANAS","Akutansi","1994","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("94","10089","1","4","Institut Adhi Tama Surabaya","Sipil","1999","II-0001/01.99.000091","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("96","10043","1","3","SMAN 1 KRIAN","IPS","2010","DN-05 Ma 0022900","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("97","10043","1","4","UNIVERSITAS AIRLANGGA","ANTROPOLOGI","2014","7208/0113/07.5/S1/2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("98","10065","1","4","Mercu Buana Jakarta","Manajemen SDM","2017","6264/031-S.1/IX/2017","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("99","10155","1","4","UIM Maulana Malik Ibrahim Malang","Bahasa dan Sastra Inggris","2015","16462/UIN-S1/F.03/2015","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("100","10070","1","5","Universitas Udayana","Arsitektur","2017","84/UN14.4.18/PP.06.02.02/2017","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("101","10099","1","4","UNIVERSITAS DIPONEGORO","TEKNIK ARSITEKTUR","2017","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("102","10081","2","0","","","0","","Certified Risk Management","2018-10-22","2018-10-24","Hotel Dafam Cawang");
INSERT INTO tbl_pendidikan VALUES("103","10014","1","1","SDN Sukarela 1 Cibiru Bandung","","1990","02 OA oa 0491007","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("105","10014","1","2","SMPN 1 UJungberung Bandung","","1993","02 OA ob 0293425","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("106","10036","1","4","UNIVERSITAS ISLAM INDONESIA","Akuntansi","2010","264/UII-S1/V/EA/36264/2010","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("110","10083","1","1","Don Bosco II","","1987","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("111","10164","1","1","SDN 091650","","2004","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("112","10164","1","2","SMP METHODIST","","2007","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("113","10164","1","3","SMAN 1 BANDAR","IPA","2010","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("114","10164","1","4","UNIVERSITAS JAMBI","AGRIBISNIS","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("115","10087","1","1","MIN TUNGGANGRI","","2002","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("116","10087","1","2","SMPN 1 TULUNGAGUNG","","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("117","10101","1","1","Negeri 02 Pagi Kayu Putih","","1980","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("118","10087","1","3","SMAN 1 BOYOLANGU","IPA","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("119","10101","1","2","Negeri 79","","1983","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("121","10101","1","3","Negeri 5","","1987","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("122","10101","1","4","Univ Urindo","","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("123","10061","1","4","Universitas Padjadjaran","Kimia","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("125","10098","1","4","Politeknik Negeri Jakarta","Teknik Sipil","2015","000332/TS-D4/PNJ/2015","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("126","10098","1","3","SMAN 2 Depok","IPA","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("127","10098","1","2","SMPN 5 Depok","","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("128","10098","1","1","SDN Beji Timur 2 Depok","","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("129","10044","1","3","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("130","10044","2","0","","","0","","AutoCad Training","2015-03-01","2018-06-01","Palembang");
INSERT INTO tbl_pendidikan VALUES("131","2","1","2","SMP 29","","1995","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("132","2","1","3","SMU Ora et Labora","","1999","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("133","2","1","4","STP Trisakti Pariwisata","Perhotelan","2003","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("134","10084","1","1","SDN 13 PAGI","","2000","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("135","10084","1","2","SMP N 81","","2002","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("136","10084","1","3","SMU N 67","IPA","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("137","10084","1","4","UNJ","EKONOMI","2009","0059512","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("138","10032","1","1","SDN CIKAMPEK VII","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("139","10032","1","2","SMPN I CIKAMPEK","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("140","10032","1","3","SMAN 2 CIREBON","IPS","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("141","10032","1","4","STIE YPKP BANDUNG","AKUNTANSI","0","S1A.9890594200","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("142","10014","1","3","SMAN 3 Cirebon","Fisika","1996","02 OB oe 0019953","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("143","10014","1","7","STIKOM Poltek Cirebon","Manajemen Informatika","2003","1417.01.D3.0104","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("144","10014","1","4","UNIVERSITAS MUHAMMADIYAH CIREBON","Manajemen","2014","A/14/03043","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("145","10181","1","1","SDN Cemara Dua Surakarta","","2001","03/Dd/0174388","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("146","10181","1","2","SMPN 1 Surakarta","","2004","DN-03 DI 0610857","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("147","10181","1","3","SMAN 3 Surakarta","IPA","2007","DN-03 Ma 0102736","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("148","10181","1","4","Universitas Sebelas Maret","Sipil Umum","2011","190/R/UN27.8/21/2011","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("149","10181","2","0","","","0","","Pelatihan Kerja Calon Karyawan & On the job training","2014-04-02","2012-06-30","Bogor");
INSERT INTO tbl_pendidikan VALUES("150","10181","2","0","","","0","","Pelatihan Basic Leadership Batch-5","2012-10-30","2011-11-02","Bogor");
INSERT INTO tbl_pendidikan VALUES("151","10182","1","4","Universitas Indonesia","Ilmu Administrasi Niaga","2008","0211/s1-FISIP/Reg/2/2008","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("152","10182","2","0","","","0","","Pelatihan Pembekalan Kejasamargaan","2009-07-22","2009-07-22","Jakarta Timur");
INSERT INTO tbl_pendidikan VALUES("153","10013","1","1","SDK Gamping","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("154","10013","1","2","SMP N 4 Yogyakarta","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("156","10013","1","3","SMEA N 3 Yogyakarta","Pariwisata","1994","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("157","10013","1","7","Bina Sarana Informatika (BSI)","Manajemen Informasi","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("158","10013","1","4","STMIK Nusa Mandiri Jakarta","Sistem Informasi","1","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("159","10149","1","1","SD Antapani 2 Bandung","","1984","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("160","10149","1","2","SMPN Cicadas /49 bandung","","1987","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("161","10149","1","3","SMAN 10 Bandung","A2/Biologi","1990","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("162","10001","1","1","Korpri 2","","1984","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("163","10001","1","2","Bele Endah","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("164","10001","1","3","STMN 2 Bandung","elektronika","1990","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("165","10001","1","4","UNTAG Cirebon","Hukum","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("166","10080","1","3","SMK Negeri 2 Buduran Sidoarjo","Akuntansi","2015","DN-05 Mk 0052854","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("168","10084","2","0","","","0","","KMPF (Kelompok Mahasiswa Peminat Fotografi ","2006-01-02","2009-05-18","UNJ");
INSERT INTO tbl_pendidikan VALUES("169","10154","1","4","Institut Teknologi Sepuluh Nopember Surabaya","Interior Architecture","1996","14124/ITS-LXX/SP/S1/96","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("170","10157","1","4","Universitas Brawijaya","Teknik Sipil","2015","95816/UB/S1/2015","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("171","10170","1","4","Universitas Negeri Malang","Sipil","2010","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("173","10086","1","4","Universitas Kristen Petra","Teknik Sipil","2010","1728/S/TS/2010/Ak/CPN","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("174","10086","1","1","SD Kristen Petra 12","Umum","2000","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("175","10086","1","2","SMP Kristen Petra 4","Umum","2003","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("176","10086","1","3","SMU Kristen Petra 4","IPA","2006","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("180","10018","1","4","Universitas Wiraswasta Indonesia","Manajemen","2013","01/02/044/1/479","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("181","10100","1","1","Al Azhar 27","","2007","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("182","10100","1","2","Sahid Islamic Boarding School","","2010","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("183","10100","1","3","SMAN 7 Bogor","","2013","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("184","10100","1","4","The London School Of Public Relation","Public Relation","2017","3808/S1-HM/STIKOM-LSPR/XI/2017","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("185","10113","1","1","SDN 08 Palmerah Jakarta","","1990","01.OA.oa.006.29555","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("186","10113","1","2","SMPN 229 Jakarta","","1992","01.OA.06.1817873","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("188","10160","1","2","SMPN Dapena ","","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("189","10113","1","3","SMEA N 2 Madiun","","1994","04 OB OM 0132751","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("190","10160","1","3","SMA Trimurti","IPS","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("191","10113","1","7","STIKOM POLTEK CIREBON","Tekhnik Informatika","2003","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("192","10160","1","4","STIE PERBANAS SURABAYA","Manajemen pemasaran","2016","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("193","10113","1","4","STIKOM POLTEK CIREBON","Tekhnik Informatika","2013","0627.01.S1.1112","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("194","10168","1","7","AMIK BSI Jakarta","Manajemen Informatika","2015","0150/1.02/AMIK-BSI/IX/2015","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("195","10159","1","1","SDN 05 Joglo","","2000","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("196","10159","1","2","SMPN 219 Jakarta","","2003","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("197","10159","1","3","SMA Yadika","","2006","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("198","10159","1","4","Universitas Al Azhar Indonesia","Hukum","2010","10070090","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("199","10068","1","3","SMK YPIB","FARMASI","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("200","10079","1","1","Negeri lengkong 2","","2009","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("202","10079","1","2","Muhammadiyah 1 mojokerto","","2012","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("203","10079","1","3","Negeri 1 mojoanyar","Multimedia","2015","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("204","10087","1","4","Politeknik Negeri Malang","Teknik Sipil","2012","8984/POLINEMA/TS/D-IV/2012","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("206","10051","1","4","Universitas Pasundan","Hukum Perdata","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("207","10110","1","1","SDN 1 Bojong Wetan","","1988","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("208","10110","1","2","SMPN 1 Klangenan","","1991","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("209","10110","1","3","STM PGRI 5 Budi Utomo","Mesin Produksi","1994","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("210","10110","1","4","Universitas Muhammadiyah Cirebon","Managemen","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("212","10070","1","4","Universitas Komputer Indonesia","Desain Interior","2013","1.5.20.II.085","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("213","10070","1","3","SMA Insan Kamil Bogor","IPA","2009","DN-02 Ma 0002484","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("214","10070","1","2","SMP Negeri 4 Bogor","","2006","02 DI 0126267","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("215","10070","1","1","SD Negeri Polisi 1 Bogor","","2003","DN-02 Dd 0101498","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("217","2","1","1","SD Mexico dan SRI Tokyo","","1992","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("218","10104","1","4","UNIV MUH Cirebon","Ekonomi-manajemen","2013","A/14/03050","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("219","10125","1","3","STM.GANESA SATRIA","OTOMOTIP","1997","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("220","10122","1","4","Universitas Tujuh Belas Agustus","Hukum","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("221","10106","2","0","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("222","10111","1","1","SDN Cangring 2","","1989","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("223","10111","1","2","SMPN WERU","","1992","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("224","10111","1","3","SMAN Palimanan","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("225","10111","1","4","UNSWAGATI","Adminedtrasi Negara","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("226","10103","1","3","SMA NEGRI 1 MANDIRANCAN","IPA","1993","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("228","10047","1","3","STM ","Mesin","1993","88/103/M/93","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("229","10097","1","3","SMA Negeri 1 Grabag","IPA","2017","DN-03 Ma/06 0010778","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("230","10097","1","2","SMP Negeri 1 Grabag","","2014","DN-03 DI 0124969","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("231","10135","1","1","SD N","","1980","II Aa No 140811","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("232","10133","1","1","SD Negri","","1988","No.05 OA pa 0018481","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("233","10133","1","2","MTS","","1992","No.E.IV/bMts-36/05549/92","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("234","10109","1","3","3 pgri","A3","1995","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("236","10133","1","3","Nasional","Aoutomotif","1995","No.05..OB on 0189126","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("237","10133","1","4","Amir Hamzah","Tehnik Sipil","2015","No.04191002/FT/UNHAM/2015","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("238","10117","1","4","Undip ","","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("239","10107","1","1","SDK BPK NGAGLIK 1 MALANG ","","1984","233269","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("240","10107","1","2","SMP KALAM KUDUS MALANG ","","1987","1021729","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("241","10107","1","3","SMT GRAFIKA MALANG ","","1990","0000495","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("242","10107","1","1","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("243","10107","1","1","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("244","10105","1","4","Universitas Muhammadiyah Cirebon","Ekonomi Manajemen","2014","A/14/03041","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("245","10105","1","1","SD SADAGORI 2 Cirebon","","1986","02OA0221912","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("246","10105","1","2","SMP Muhammadiyah 2 Cirebon","","1989","02OBob1765055","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("247","10105","1","3","SMA Muhammadiyah 9 Bekasi","IPA","1992","0964/R/N/SRSMA/92","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("248","10144","1","3","SMA DARMABAKTI","","1986","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("249","10083","1","2","Don Bosco II","","1990","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("250","10083","1","3","Melania II","","1994","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("251","10083","1","4","Universitas Tarumanagara","Real Estate/Planologi","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("252","10116","1","1","SD Kebon Sari Tuban","","1982","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("253","10106","1","1","SDN MANUKAN KULON IV NO 541 SURABAYA","","1985","04 OA oa 547723","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("255","10106","1","2","SMP WARDHANI SURABAYA","","1988","04 OB ob 0958957","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("256","10106","1","3","STM PGRI 1 SURABAYA","","1991","04 OB or 0043366","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("257","10116","1","2","MTsN Tuban","","1985","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("258","10106","1","4","UNIVERSITAS MUHAMADIYAH CIREBON","MANAJEMEN","2014","A/14/03053","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("259","10116","1","3","STM  N Tuban","","1988","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("260","10116","1","4","UNTAG Semarang","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("261","10043","1","5"," UNIVERSITAS AIRLANGGA","PENGEMBANGAN SUMBER DAYA MANUSIA","2016","323/001004/09.2/S2/2016","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("263","10020","1","1","SDN Pondok Ungu 1","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("264","10020","1","2","SMP Swasta Patriot Bekasi","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("265","10020","1","3","SMA Nusantara 1 Jakarta","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("266","10020","1","4","STIM Budi Bhakti Bekasi","Managemen","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("267","10135","1","2","SMP N","","1983","No. 05 Ob 0218726","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("268","10131","1","1","SD SWASTA PAB MEDAN","NIHIL","1980","No. II Aa No. 064832","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("269","10131","1","2","SMP SWASTA PAB MEDAN","NIHIL","1983","No.05 OB ob 0146329","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("270","10131","1","3","SMEA NEGERI-1 MEDAN","AKUNTANSI","1986","No.05.OC.os.0032727","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("271","10135","1","3","SMA Apipsu","","1986","No 05 OC oh 0035415","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("272","10112","1","1","SDN Subah 2","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("273","10112","1","2","SMPN 1 Subah","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("274","10112","1","3","STM Yapenda PKL","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("275","10131","1","4","UMA (Universitas Medan Area)","MANAGEMENT","1995","No.1569/III.2/UMA/1995","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("276","10033","1","4","STIE YASMI CIREBON","MANAJEMEN","2014","X-1624/S1/M/XII/2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("279","10137","1","1","SD negeri","","1983","NO. 05 OA oa 073911","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("280","10137","1","2","MUSDA","","1986","no.05 OB ob 0220785","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("281","10137","1","3","sekolah pertanian/pembangunan","tanaman /perkebunan","1989","NO.md/TPI/03888/89","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("282","10134","1","1","SDN NO. 010127","","1985","No.OA oa 018300 ","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("283","10134","1","2","SMPN SEI PIRING","","1988","No. 05 OB ob 0307672","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("284","10134","1","3","STM PEMDA","","1991","No. 05 OB ob or 0072330","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("285","10134","1","4","UNIVERSITAS AMIR HAMZAH","EKONOMI MANAGEMEN","2014","No. 02062401/FE/UNHAM/2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("286","10132","1","3","Swasta Taman Siswa","sos","1988","No.05.oc oh 0396758","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("287","10132","1","2","Swasta Kesatria Medan","","1984","No.05.OB ob 0162644","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("288","10132","1","1","SD Negri 060787","","1981","No.05 OA oa 156131","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("289","10076","2","0","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("290","10076","1","3","Bakti Idhata","Multimedia","2010","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("291","10076","1","1","SDI Darul Maarif","","2004","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("292","10017","1","1","SDN SOKA II BANDUNG","","1981","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("293","10017","1","2","SMPN 20 BANDUNG","","1984","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("294","10017","1","3","SMAN 14 BANDUNG","FISIKA","1987","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("295","10091","1","1","SDN PANGRANGO","","2006","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("296","10091","1","2","SMPN 7 CIREBON","","2009","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("297","10091","1","3","SMAN 3 CIREBON","IPA","2012","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("298","10091","1","4","UNIVERSITAS MUHAMMADIYAH JAKARTA","KESEHATAN MASYARAKAT","2016","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("299","10166","1","1","MUHAMMADIYAH SOKONANDI","","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("300","10166","1","2","NEGERI 5 YOGYAKARTA","","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("301","10160","1","1","SDN KEDURUS 433","","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("302","10166","1","3","NEGERI 3 YOGYAKARTA","IPA","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("305","10166","1","4","UNIVERSITAS ISLAM INDONESIA","INTERNATIONAL PROGRAM-AKUNTANSI","2018","16/UII-S1/I/5/EA-IP/62050/2018","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("306","10166","2","0","","","0","","BREVET PAJAK A & B","2016-10-10","2016-12-07","P2EB FEB UGM YOGYAKARTA");
INSERT INTO tbl_pendidikan VALUES("308","10076","1","2","SLTP 68","","2007","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("309","10166","2","0","","","0","","ASSOCIATION OF CHARTERED CERTIFIED ACCOUNTANTS (ACCA MODULE F5 AND F8)","2017-09-01","2018-09-01","YOGYAKARTA & JAKARTA");
INSERT INTO tbl_pendidikan VALUES("310","10161","1","4","Universitas Padjadjaran","Jurnalistik","2014","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("311","10108","1","1","SD Yayasan pendidikan Kristen II surabaya","","1984","04OAoa018839","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("312","10161","1","7","Universitas Padjadjaran","Komunikasi Bisnis","2010","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("313","10075","1","3","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("314","10108","1","2","SMPN 1 lawang","","1987","04OBob1021076","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("315","10108","1","3","Sman purwosari pasuruan","IPS","1990","04OCoh0628218","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("316","10108","1","4","Universitas 45 Surabaya","Managemen","2006","596/45-XIV/EM-S1/2006","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("317","10161","1","3","Pasundan 1 Bandung","Sosial","2007","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("318","10161","1","2","SMPN 13 Bandung","","2004","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("319","10161","1","1","SDN Karang Pawulang II Bandung","","2001","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("320","10075","1","2","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("321","10064","1","1","SDN 85","","2000","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("322","10064","1","2","SMP 42","","2003","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("323","10064","1","3","SMAN 5 Palembang","IPS","2006","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("324","10064","1","4","Universitas Islam Indonesia","Manajemen","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("325","10073","1","3","SMA N 9 Bandarlampung","IPA","2012","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("326","10073","1","2","MTs N 2 Bandarlampung","","2009","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("327","10073","1","1","SDN 1 Bandarlampung","","2006","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("329","10171","1","7","POLITEKNIK NEGERI MALANG","TEKNIK SIPIL","2018","19300/PL2/TS/D-III/2018","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("330","10130","1","1","SD NEGERI No 060870","","1985","No.05OAoa 071797","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("331","10130","1","2","SMA HUSNI THAMRIN","","1988","No.05 OB ob 0226259","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("332","10130","1","3","SMA HUSNI THAMRIN","","1991","No. 05 OB og 0180742","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("333","10061","1","1","SDN Karapyak 1 Sumedang","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("334","10016","1","4","STHI","HUKUM","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("335","10136","1","1","SDN 104293 MAKMUR T.MENGKUDU","","1983","05 OA oa 125266","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("336","10136","1","2","SMP NEG T. MENGKUDU","","1986","05 OB ob 0233399","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("338","10136","1","3","SWASTA SWA BINA KARYA MEDAN ","LISTRIK","1989","05 OC ou 0032605","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("339","10055","1","1","SDN 1 TEGALREJO","","1995","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("340","10055","1","2","MTSn 1 CAWAS","","1998","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("341","10055","1","3","MAN 1 KLATEN","IPA","2001","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("342","10055","1","4","UNIVERSITAS MUHAMMADIYAH SURAKARTA","TEKNIK SURAKARTA","2009","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("343","10035","1","3","SMK Kemaritiman","Nautika Perikanan Laut","2003","4237/kep1307-Disdik/2003","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("344","10183","1","1","SDN HAURGEULIS 1","","83","No.02 OA oa 229411","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("345","10183","1","2","SMPN 1 SUBANG","","86","No.02 OB ob 1468669","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("346","10183","1","3","SMAN 1 BANDUNG","BIOLOGI","89","No.02 OC oc 0321832","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("347","10183","1","4","UNISBA","Teknik & Manajemen Industri","96","No. 5217","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("348","10180","1","1","SDN 05 Jakarta","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("349","10180","1","2","SMPN 69 Jakarta","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("350","10180","1","3","PGRI 43 ","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("351","10180","2","0","","","0","","Pelayanan Prima ","1999-03-29","1999-03-31","Jakarta");
INSERT INTO tbl_pendidikan VALUES("352","10180","1","4","UNIVERSITAS MUHAMMADIYAH JAKARTA","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("353","10180","2","0","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("354","10067","1","3","PGRI 2 DENPASAR","IPS","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("355","10067","1","2","PGRI 1 DENPASAR","","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("357","10067","1","1","MUHAMMADIYAH 1 DENPASAR","","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("358","10090","1","1","SDN Cilegong 1 Jatiluhur, Purwakarta","","2002","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("359","10090","1","2","SMPN 1 Jatiluhur, Purwakarta","","2005","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("360","10090","1","3","SMAN 3 Purwakarta","","2008","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("361","10090","1","7","STIEB Perdana Mandiri Purwakarta","","2011","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("363","10069","1","4","Universitas Persada Indonesia Y.A.I","Ilmu Komunikasi (Public Relations)","2017","67/SK-YDS/R/UPI Y.A.I/X/2017","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("364","10143","1","1","SDN VII MAJALAYA","","1982","  02 OA oa 030374","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("365","10143","1","2","SMPN I PASEH","","1985"," 02 OB ob 1254103","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("366","10143","1","3","STMN 2 BANDUNG","LISTRIK","1985","02 OC ou 0092516","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("367","10119","1","1","Sdn Pangging 1 tegal","","1984","03OAoa 147484","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("368","10119","1","2","Smpn 17 semarang","","1988","03OBob 1321469","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("369","10119","1","3","Sma teuku umar semarang","A1","1991","03Obog 0098054","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("370","10146","1","1","SDN 2 Sipoldas","","1978","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("371","10146","1","2","SMPN 2 Pematang Raya","","1984","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("372","10146","1","3","SMA Muhamadiyah 1 Medan","","1990","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("373","10146","1","4","STIM Budi Bakti","Management","2011","0299/41110075/100868/2012","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("374","10140","1","1","","","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("375","10129","1","1","SDN KOTAKULON I BONDOWOSO","","1986","04 OA oa 0522318 ","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("376","10129","1","2","SMP NEGERI 3 JEMBER","","1989","04 OB ob  1279083","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("377","10129","1","3","SMA NEGERI 2 JEMBER","Biologi","1992","04 OB og 0288840","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("378","10129","1","4","UNIVERSITAS 45 SURABAYA","Management","2006","587/45-XIV/EM-S1/2006","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("379","10139","1","1","SENTANAN","","0","04OAoa598715","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("380","10139","1","2","SMPN 2 MOJOKERTO","","0","04OBob0982172","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("381","10139","1","3","SMAN 2","A2 Biologi","1991","04OBog0285106","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("382","10139","1","4","STIE AL-ANWAR MOJOKERTO","MANAJEMEN","0","140/073094.61201/07.2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("383","10139","2","0","","","0","","PELATIHAN PEMAHAMAN KPKU","2015-12-10","2015-12-11","CABANG SURABAYA GEMPOL");
INSERT INTO tbl_pendidikan VALUES("384","10139","2","0","","","0","","PELATIHAN PAJAK TERAPAN BREVE A&B","2012-09-17","2013-02-25","IKATAN AKUTANSI INDONESIA");
INSERT INTO tbl_pendidikan VALUES("385","10139","2","0","","","0","","PELATIHAN KADER PENGAWAS DAN PENGURUS KOPKAR JMB IV","2013-09-28","2013-09-28","CABANG SURABAYA GEMPOL");
INSERT INTO tbl_pendidikan VALUES("386","10139","2","0","","","0","","PELATIHAN PENULISAN BERITA & WAWANCARA","2018-09-20","2018-09-20","CABANG SURABAYA GEMPOL");
INSERT INTO tbl_pendidikan VALUES("387","10139","2","0","","","0","","WORKSHOP SISTEM PENGENDALIAN INTERNAL PERUSAHAAN","2013-11-28","2013-11-28","CABANG SURABAYA GEMPOL");
INSERT INTO tbl_pendidikan VALUES("388","10139","2","0","","","0","","PUSAT PENGEMBANGAN SUMBER DAYA INSANI","2008-05-14","2008-05-15","HOTEL INA TRETES");
INSERT INTO tbl_pendidikan VALUES("389","10139","2","0","","","0","","PELATIHAN APLIKASI TULTA","2011-07-19","2018-07-20","CABANG SURABAYA GEMPOL");
INSERT INTO tbl_pendidikan VALUES("390","10139","2","0","","","0","","PERSERTA LOMBA KARYA TULIS BULAN MUTU","2018-03-28","2018-03-28","KANTOR PUSAT");
INSERT INTO tbl_pendidikan VALUES("391","10139","2","0","","","0","","PENGHARGAAN KARYA MUTU","2018-11-27","2018-11-28","CABANG SURABAYA GEMPOL");
INSERT INTO tbl_pendidikan VALUES("392","10139","2","0","","","0","","PELAYANAN PRIMA","2000-11-02","2000-11-04","");
INSERT INTO tbl_pendidikan VALUES("393","10139","2","0","","","0","","MANAJEMEN RITEL KFC MOJOKERTO","2018-05-10","2018-05-10","");
INSERT INTO tbl_pendidikan VALUES("394","10139","2","0","","","0","","PELATIHAN PAJAK  PPH 21","2012-11-18","2018-11-18","KAMPUS AL-ANWAR");
INSERT INTO tbl_pendidikan VALUES("395","10158","1","3","SMK Negeri 3 Surabaya","Teknik Multimedia","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("396","10158","2","0","","","0",""," DKV (S1) - Umaha","2015-09-04","2016-12-14","Surabaya");
INSERT INTO tbl_pendidikan VALUES("397","10158","1","8","Umar Usman Business School","Bisnis Syariah","0","","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("398","10187","1","4","UNIVERSITAS SUMATERA UTARA","TEKNIK SIPIL","2014","12758/UN5.2.1.4/LLS/S-1/2014","","0000-00-00","0000-00-00","");
INSERT INTO tbl_pendidikan VALUES("399","10188","1","4","UNIVERSITAS DIPONEGORO","TEKNIK SIPIL","2011","U:14748/ST/F:19681","","0000-00-00","0000-00-00","");



DROP TABLE tbl_penerimaan;

CREATE TABLE `tbl_penerimaan` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `kode_penerimaan` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_potongan;

CREATE TABLE `tbl_potongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_gaji` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `kode_potongan` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tbl_potongan VALUES("1","2","6","28","2503613");
INSERT INTO tbl_potongan VALUES("2","2","10","28","0");
INSERT INTO tbl_potongan VALUES("3","2","4","28","225183");
INSERT INTO tbl_potongan VALUES("4","2","2","28","121252");
INSERT INTO tbl_potongan VALUES("5","2","9","28","80877");
INSERT INTO tbl_potongan VALUES("6","2","10003","28","1038536");
INSERT INTO tbl_potongan VALUES("7","2","10004","28","477505");
INSERT INTO tbl_potongan VALUES("8","2","10008","28","1881503");



DROP TABLE tbl_presensi;

CREATE TABLE `tbl_presensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divisi` varchar(25) NOT NULL,
  `bulan` date NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_presensi VALUES("1","","2018-12-19","");



DROP TABLE tbl_presensi_karyawan;

CREATE TABLE `tbl_presensi_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_presensi` int(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam_masuk` varchar(255) NOT NULL,
  `jam_pulang` varchar(255) NOT NULL,
  `terlambat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1799 DEFAULT CHARSET=latin1;

INSERT INTO tbl_presensi_karyawan VALUES("1","1","10003","UCI SANUSI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("2","1","10003","UCI SANUSI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("3","1","10003","UCI SANUSI","03-Dec-18","07:58","","","");
INSERT INTO tbl_presensi_karyawan VALUES("4","1","10003","UCI SANUSI","04-Dec-18","07:40","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("5","1","10003","UCI SANUSI","05-Dec-18","08:11","","00:11","");
INSERT INTO tbl_presensi_karyawan VALUES("6","1","10003","UCI SANUSI","06-Dec-18","08:16","","00:16","");
INSERT INTO tbl_presensi_karyawan VALUES("7","1","10003","UCI SANUSI","07-Dec-18","07:36","","","");
INSERT INTO tbl_presensi_karyawan VALUES("8","1","10003","UCI SANUSI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("9","1","10003","UCI SANUSI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("10","1","10003","UCI SANUSI","10-Dec-18","08:46","","00:46","");
INSERT INTO tbl_presensi_karyawan VALUES("11","1","10003","UCI SANUSI","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("12","1","10003","UCI SANUSI","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("13","1","10003","UCI SANUSI","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("14","1","10003","UCI SANUSI","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("15","1","10003","UCI SANUSI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("16","1","10003","UCI SANUSI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("17","1","10003","UCI SANUSI","17-Dec-18","07:56","","","");
INSERT INTO tbl_presensi_karyawan VALUES("18","1","10003","UCI SANUSI","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("19","1","10003","UCI SANUSI","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("20","1","10003","UCI SANUSI","20-Dec-18","07:41","","","");
INSERT INTO tbl_presensi_karyawan VALUES("21","1","10003","UCI SANUSI","21-Dec-18","07:29","","","");
INSERT INTO tbl_presensi_karyawan VALUES("22","1","10003","UCI SANUSI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("23","1","10003","UCI SANUSI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("24","1","10003","UCI SANUSI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("25","1","10003","UCI SANUSI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("26","1","10003","UCI SANUSI","26-Dec-18","07:51","20:36","","");
INSERT INTO tbl_presensi_karyawan VALUES("27","1","10003","UCI SANUSI","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("28","1","10003","UCI SANUSI","28-Dec-18","07:50","20:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("29","1","10003","UCI SANUSI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("30","1","10003","UCI SANUSI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("31","1","10003","UCI SANUSI","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("32","1","10007","R.A. AYU SUZANNE P","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("33","1","10007","R.A. AYU SUZANNE P","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("34","1","10007","R.A. AYU SUZANNE P","03-Dec-18","07:52","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("35","1","10007","R.A. AYU SUZANNE P","04-Dec-18","08:26","19:20","00:26","");
INSERT INTO tbl_presensi_karyawan VALUES("36","1","10007","R.A. AYU SUZANNE P","05-Dec-18","08:39","18:49","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("37","1","10007","R.A. AYU SUZANNE P","06-Dec-18","08:14","18:32","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("38","1","10007","R.A. AYU SUZANNE P","07-Dec-18","08:04","18:25","00:04","");
INSERT INTO tbl_presensi_karyawan VALUES("39","1","10007","R.A. AYU SUZANNE P","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("40","1","10007","R.A. AYU SUZANNE P","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("41","1","10007","R.A. AYU SUZANNE P","10-Dec-18","07:58","19:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("42","1","10007","R.A. AYU SUZANNE P","11-Dec-18","08:21","19:47","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("43","1","10007","R.A. AYU SUZANNE P","12-Dec-18","08:33","20:15","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("44","1","10007","R.A. AYU SUZANNE P","13-Dec-18","08:26","19:02","00:26","");
INSERT INTO tbl_presensi_karyawan VALUES("45","1","10007","R.A. AYU SUZANNE P","14-Dec-18","08:46","18:33","00:46","");
INSERT INTO tbl_presensi_karyawan VALUES("46","1","10007","R.A. AYU SUZANNE P","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("47","1","10007","R.A. AYU SUZANNE P","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("48","1","10007","R.A. AYU SUZANNE P","17-Dec-18","08:42","19:39","00:42","");
INSERT INTO tbl_presensi_karyawan VALUES("49","1","10007","R.A. AYU SUZANNE P","18-Dec-18","09:46","18:36","01:46","");
INSERT INTO tbl_presensi_karyawan VALUES("50","1","10007","R.A. AYU SUZANNE P","19-Dec-18","08:31","18:13","00:31","");
INSERT INTO tbl_presensi_karyawan VALUES("51","1","10007","R.A. AYU SUZANNE P","20-Dec-18","","19:02","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("52","1","10007","R.A. AYU SUZANNE P","21-Dec-18","08:51","17:23","00:51","");
INSERT INTO tbl_presensi_karyawan VALUES("53","1","10007","R.A. AYU SUZANNE P","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("54","1","10007","R.A. AYU SUZANNE P","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("55","1","10007","R.A. AYU SUZANNE P","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("56","1","10007","R.A. AYU SUZANNE P","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("57","1","10007","R.A. AYU SUZANNE P","26-Dec-18","08:14","22:27","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("58","1","10007","R.A. AYU SUZANNE P","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("59","1","10007","R.A. AYU SUZANNE P","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("60","1","10007","R.A. AYU SUZANNE P","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("61","1","10007","R.A. AYU SUZANNE P","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("62","1","10007","R.A. AYU SUZANNE P","31-Dec-18","08:32","17:13","00:32","");
INSERT INTO tbl_presensi_karyawan VALUES("63","1","10014","META HERLINA PUSPITANING","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("64","1","10014","META HERLINA PUSPITANING","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("65","1","10014","META HERLINA PUSPITANING","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("66","1","10014","META HERLINA PUSPITANING","04-Dec-18","08:29","19:57","00:29","");
INSERT INTO tbl_presensi_karyawan VALUES("67","1","10014","META HERLINA PUSPITANING","05-Dec-18","08:30","18:30","00:30","");
INSERT INTO tbl_presensi_karyawan VALUES("68","1","10014","META HERLINA PUSPITANING","06-Dec-18","08:21","19:55","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("69","1","10014","META HERLINA PUSPITANING","07-Dec-18","08:59","19:17","00:59","");
INSERT INTO tbl_presensi_karyawan VALUES("70","1","10014","META HERLINA PUSPITANING","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("71","1","10014","META HERLINA PUSPITANING","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("72","1","10014","META HERLINA PUSPITANING","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("73","1","10014","META HERLINA PUSPITANING","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("74","1","10014","META HERLINA PUSPITANING","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("75","1","10014","META HERLINA PUSPITANING","13-Dec-18","08:20","19:57","00:20","");
INSERT INTO tbl_presensi_karyawan VALUES("76","1","10014","META HERLINA PUSPITANING","14-Dec-18","08:35","18:32","00:35","");
INSERT INTO tbl_presensi_karyawan VALUES("77","1","10014","META HERLINA PUSPITANING","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("78","1","10014","META HERLINA PUSPITANING","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("79","1","10014","META HERLINA PUSPITANING","17-Dec-18","08:36","","00:36","");
INSERT INTO tbl_presensi_karyawan VALUES("80","1","10014","META HERLINA PUSPITANING","18-Dec-18","09:08","17:26","01:08","");
INSERT INTO tbl_presensi_karyawan VALUES("81","1","10014","META HERLINA PUSPITANING","19-Dec-18","08:30","17:31","00:30","");
INSERT INTO tbl_presensi_karyawan VALUES("82","1","10014","META HERLINA PUSPITANING","20-Dec-18","09:09","18:42","01:09","");
INSERT INTO tbl_presensi_karyawan VALUES("83","1","10014","META HERLINA PUSPITANING","21-Dec-18","08:24","","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("84","1","10014","META HERLINA PUSPITANING","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("85","1","10014","META HERLINA PUSPITANING","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("86","1","10014","META HERLINA PUSPITANING","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("87","1","10014","META HERLINA PUSPITANING","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("88","1","10014","META HERLINA PUSPITANING","26-Dec-18","09:06","17:27","01:06","");
INSERT INTO tbl_presensi_karyawan VALUES("89","1","10014","META HERLINA PUSPITANING","27-Dec-18","08:18","17:16","00:18","");
INSERT INTO tbl_presensi_karyawan VALUES("90","1","10014","META HERLINA PUSPITANING","28-Dec-18","09:09","16:47","01:09","");
INSERT INTO tbl_presensi_karyawan VALUES("91","1","10014","META HERLINA PUSPITANING","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("92","1","10014","META HERLINA PUSPITANING","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("93","1","10014","META HERLINA PUSPITANING","31-Dec-18","08:42","15:59","00:42","");
INSERT INTO tbl_presensi_karyawan VALUES("94","1","10015","MARLINA RIRIN INDRIYANI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("95","1","10015","MARLINA RIRIN INDRIYANI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("96","1","10015","MARLINA RIRIN INDRIYANI","03-Dec-18","10:42","19:25","02:42","");
INSERT INTO tbl_presensi_karyawan VALUES("97","1","10015","MARLINA RIRIN INDRIYANI","04-Dec-18","","18:09","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("98","1","10015","MARLINA RIRIN INDRIYANI","05-Dec-18","08:10","17:43","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("99","1","10015","MARLINA RIRIN INDRIYANI","06-Dec-18","","19:56","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("100","1","10015","MARLINA RIRIN INDRIYANI","07-Dec-18","07:54","19:27","","");
INSERT INTO tbl_presensi_karyawan VALUES("101","1","10015","MARLINA RIRIN INDRIYANI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("102","1","10015","MARLINA RIRIN INDRIYANI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("103","1","10015","MARLINA RIRIN INDRIYANI","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("104","1","10015","MARLINA RIRIN INDRIYANI","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("105","1","10015","MARLINA RIRIN INDRIYANI","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("106","1","10015","MARLINA RIRIN INDRIYANI","13-Dec-18","07:59","19:22","","");
INSERT INTO tbl_presensi_karyawan VALUES("107","1","10015","MARLINA RIRIN INDRIYANI","14-Dec-18","08:33","18:25","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("108","1","10015","MARLINA RIRIN INDRIYANI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("109","1","10015","MARLINA RIRIN INDRIYANI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("110","1","10015","MARLINA RIRIN INDRIYANI","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("111","1","10015","MARLINA RIRIN INDRIYANI","18-Dec-18","08:33","18:22","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("112","1","10015","MARLINA RIRIN INDRIYANI","19-Dec-18","08:06","17:14","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("113","1","10015","MARLINA RIRIN INDRIYANI","20-Dec-18","08:05","18:45","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("114","1","10015","MARLINA RIRIN INDRIYANI","21-Dec-18","07:42","","","");
INSERT INTO tbl_presensi_karyawan VALUES("115","1","10015","MARLINA RIRIN INDRIYANI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("116","1","10015","MARLINA RIRIN INDRIYANI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("117","1","10015","MARLINA RIRIN INDRIYANI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("118","1","10015","MARLINA RIRIN INDRIYANI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("119","1","10015","MARLINA RIRIN INDRIYANI","26-Dec-18","","18:10","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("120","1","10015","MARLINA RIRIN INDRIYANI","27-Dec-18","08:02","18:47","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("121","1","10015","MARLINA RIRIN INDRIYANI","28-Dec-18","07:50","18:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("122","1","10015","MARLINA RIRIN INDRIYANI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("123","1","10015","MARLINA RIRIN INDRIYANI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("124","1","10015","MARLINA RIRIN INDRIYANI","31-Dec-18","07:53","17:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("125","1","10020","DONY IKHWAN","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("126","1","10020","DONY IKHWAN","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("127","1","10020","DONY IKHWAN","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("128","1","10020","DONY IKHWAN","04-Dec-18","13:19","","05:19","");
INSERT INTO tbl_presensi_karyawan VALUES("129","1","10020","DONY IKHWAN","05-Dec-18","09:27","17:46","01:27","");
INSERT INTO tbl_presensi_karyawan VALUES("130","1","10020","DONY IKHWAN","06-Dec-18","","16:57","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("131","1","10020","DONY IKHWAN","07-Dec-18","","17:44","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("132","1","10020","DONY IKHWAN","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("133","1","10020","DONY IKHWAN","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("134","1","10020","DONY IKHWAN","10-Dec-18","","17:40","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("135","1","10020","DONY IKHWAN","11-Dec-18","08:34","17:25","00:34","");
INSERT INTO tbl_presensi_karyawan VALUES("136","1","10020","DONY IKHWAN","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("137","1","10020","DONY IKHWAN","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("138","1","10020","DONY IKHWAN","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("139","1","10020","DONY IKHWAN","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("140","1","10020","DONY IKHWAN","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("141","1","10020","DONY IKHWAN","17-Dec-18","08:36","17:16","00:36","");
INSERT INTO tbl_presensi_karyawan VALUES("142","1","10020","DONY IKHWAN","18-Dec-18","","17:15","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("143","1","10020","DONY IKHWAN","19-Dec-18","08:27","","00:27","");
INSERT INTO tbl_presensi_karyawan VALUES("144","1","10020","DONY IKHWAN","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("145","1","10020","DONY IKHWAN","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("146","1","10020","DONY IKHWAN","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("147","1","10020","DONY IKHWAN","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("148","1","10020","DONY IKHWAN","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("149","1","10020","DONY IKHWAN","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("150","1","10020","DONY IKHWAN","26-Dec-18","12:59","17:05","04:59","");
INSERT INTO tbl_presensi_karyawan VALUES("151","1","10020","DONY IKHWAN","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("152","1","10020","DONY IKHWAN","28-Dec-18","","17:32","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("153","1","10020","DONY IKHWAN","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("154","1","10020","DONY IKHWAN","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("155","1","10020","DONY IKHWAN","31-Dec-18","08:14","","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("156","1","10021","RONI WIJAYA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("157","1","10021","RONI WIJAYA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("158","1","10021","RONI WIJAYA","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("159","1","10021","RONI WIJAYA","04-Dec-18","09:42","","01:42","");
INSERT INTO tbl_presensi_karyawan VALUES("160","1","10021","RONI WIJAYA","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("161","1","10021","RONI WIJAYA","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("162","1","10021","RONI WIJAYA","07-Dec-18","09:18","","01:18","");
INSERT INTO tbl_presensi_karyawan VALUES("163","1","10021","RONI WIJAYA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("164","1","10021","RONI WIJAYA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("165","1","10021","RONI WIJAYA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("166","1","10021","RONI WIJAYA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("167","1","10021","RONI WIJAYA","12-Dec-18","08:05","","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("168","1","10021","RONI WIJAYA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("169","1","10021","RONI WIJAYA","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("170","1","10021","RONI WIJAYA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("171","1","10021","RONI WIJAYA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("172","1","10021","RONI WIJAYA","17-Dec-18","09:35","","01:35","");
INSERT INTO tbl_presensi_karyawan VALUES("173","1","10021","RONI WIJAYA","18-Dec-18","13:23","","05:23","");
INSERT INTO tbl_presensi_karyawan VALUES("174","1","10021","RONI WIJAYA","19-Dec-18","09:45","","01:45","");
INSERT INTO tbl_presensi_karyawan VALUES("175","1","10021","RONI WIJAYA","20-Dec-18","12:41","","04:41","");
INSERT INTO tbl_presensi_karyawan VALUES("176","1","10021","RONI WIJAYA","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("177","1","10021","RONI WIJAYA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("178","1","10021","RONI WIJAYA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("179","1","10021","RONI WIJAYA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("180","1","10021","RONI WIJAYA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("181","1","10021","RONI WIJAYA","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("182","1","10021","RONI WIJAYA","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("183","1","10021","RONI WIJAYA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("184","1","10021","RONI WIJAYA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("185","1","10021","RONI WIJAYA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("186","1","10021","RONI WIJAYA","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("187","1","10022","SUMARSONO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("188","1","10022","SUMARSONO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("189","1","10022","SUMARSONO","03-Dec-18","08:06","","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("190","1","10022","SUMARSONO","04-Dec-18","09:05","15:27","01:05","");
INSERT INTO tbl_presensi_karyawan VALUES("191","1","10022","SUMARSONO","05-Dec-18","14:47","17:11","06:47","");
INSERT INTO tbl_presensi_karyawan VALUES("192","1","10022","SUMARSONO","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("193","1","10022","SUMARSONO","07-Dec-18","09:06","","01:06","");
INSERT INTO tbl_presensi_karyawan VALUES("194","1","10022","SUMARSONO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("195","1","10022","SUMARSONO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("196","1","10022","SUMARSONO","10-Dec-18","","16:11","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("197","1","10022","SUMARSONO","11-Dec-18","13:12","17:24","05:12","");
INSERT INTO tbl_presensi_karyawan VALUES("198","1","10022","SUMARSONO","12-Dec-18","07:57","","","");
INSERT INTO tbl_presensi_karyawan VALUES("199","1","10022","SUMARSONO","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("200","1","10022","SUMARSONO","14-Dec-18","11:34","","03:34","");
INSERT INTO tbl_presensi_karyawan VALUES("201","1","10022","SUMARSONO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("202","1","10022","SUMARSONO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("203","1","10022","SUMARSONO","17-Dec-18","10:18","","02:18","");
INSERT INTO tbl_presensi_karyawan VALUES("204","1","10022","SUMARSONO","18-Dec-18","08:39","17:00","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("205","1","10022","SUMARSONO","19-Dec-18","08:29","15:36","00:29","");
INSERT INTO tbl_presensi_karyawan VALUES("206","1","10022","SUMARSONO","20-Dec-18","08:04","","00:04","");
INSERT INTO tbl_presensi_karyawan VALUES("207","1","10022","SUMARSONO","21-Dec-18","08:34","17:09","00:34","");
INSERT INTO tbl_presensi_karyawan VALUES("208","1","10022","SUMARSONO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("209","1","10022","SUMARSONO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("210","1","10022","SUMARSONO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("211","1","10022","SUMARSONO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("212","1","10022","SUMARSONO","26-Dec-18","07:42","","","");
INSERT INTO tbl_presensi_karyawan VALUES("213","1","10022","SUMARSONO","27-Dec-18","08:35","","00:35","");
INSERT INTO tbl_presensi_karyawan VALUES("214","1","10022","SUMARSONO","28-Dec-18","08:57","","00:57","");
INSERT INTO tbl_presensi_karyawan VALUES("215","1","10022","SUMARSONO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("216","1","10022","SUMARSONO","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("217","1","10022","SUMARSONO","31-Dec-18","08:19","","00:19","");
INSERT INTO tbl_presensi_karyawan VALUES("218","1","10023","IMAD ZAKY MUBARAK","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("219","1","10023","IMAD ZAKY MUBARAK","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("220","1","10023","IMAD ZAKY MUBARAK","03-Dec-18","","19:25","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("221","1","10023","IMAD ZAKY MUBARAK","04-Dec-18","","18:09","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("222","1","10023","IMAD ZAKY MUBARAK","05-Dec-18","08:33","18:41","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("223","1","10023","IMAD ZAKY MUBARAK","06-Dec-18","","19:56","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("224","1","10023","IMAD ZAKY MUBARAK","07-Dec-18","08:00","19:30","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("225","1","10023","IMAD ZAKY MUBARAK","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("226","1","10023","IMAD ZAKY MUBARAK","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("227","1","10023","IMAD ZAKY MUBARAK","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("228","1","10023","IMAD ZAKY MUBARAK","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("229","1","10023","IMAD ZAKY MUBARAK","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("230","1","10023","IMAD ZAKY MUBARAK","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("231","1","10023","IMAD ZAKY MUBARAK","14-Dec-18","","18:25","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("232","1","10023","IMAD ZAKY MUBARAK","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("233","1","10023","IMAD ZAKY MUBARAK","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("234","1","10023","IMAD ZAKY MUBARAK","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("235","1","10023","IMAD ZAKY MUBARAK","18-Dec-18","","18:22","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("236","1","10023","IMAD ZAKY MUBARAK","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("237","1","10023","IMAD ZAKY MUBARAK","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("238","1","10023","IMAD ZAKY MUBARAK","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("239","1","10023","IMAD ZAKY MUBARAK","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("240","1","10023","IMAD ZAKY MUBARAK","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("241","1","10023","IMAD ZAKY MUBARAK","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("242","1","10023","IMAD ZAKY MUBARAK","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("243","1","10023","IMAD ZAKY MUBARAK","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("244","1","10023","IMAD ZAKY MUBARAK","27-Dec-18","","18:47","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("245","1","10023","IMAD ZAKY MUBARAK","28-Dec-18","07:46","18:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("246","1","10023","IMAD ZAKY MUBARAK","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("247","1","10023","IMAD ZAKY MUBARAK","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("248","1","10023","IMAD ZAKY MUBARAK","31-Dec-18","13:34","","05:34","");
INSERT INTO tbl_presensi_karyawan VALUES("249","1","10025","TRIA OKTAVIANI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("250","1","10025","TRIA OKTAVIANI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("251","1","10025","TRIA OKTAVIANI","03-Dec-18","07:57","","","");
INSERT INTO tbl_presensi_karyawan VALUES("252","1","10025","TRIA OKTAVIANI","04-Dec-18","13:20","19:57","05:20","");
INSERT INTO tbl_presensi_karyawan VALUES("253","1","10025","TRIA OKTAVIANI","05-Dec-18","07:59","18:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("254","1","10025","TRIA OKTAVIANI","06-Dec-18","07:55","17:19","","");
INSERT INTO tbl_presensi_karyawan VALUES("255","1","10025","TRIA OKTAVIANI","07-Dec-18","08:07","18:26","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("256","1","10025","TRIA OKTAVIANI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("257","1","10025","TRIA OKTAVIANI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("258","1","10025","TRIA OKTAVIANI","10-Dec-18","07:50","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("259","1","10025","TRIA OKTAVIANI","11-Dec-18","07:53","18:47","","");
INSERT INTO tbl_presensi_karyawan VALUES("260","1","10025","TRIA OKTAVIANI","12-Dec-18","08:46","17:16","00:46","");
INSERT INTO tbl_presensi_karyawan VALUES("261","1","10025","TRIA OKTAVIANI","13-Dec-18","07:59","19:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("262","1","10025","TRIA OKTAVIANI","14-Dec-18","","17:07","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("263","1","10025","TRIA OKTAVIANI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("264","1","10025","TRIA OKTAVIANI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("265","1","10025","TRIA OKTAVIANI","17-Dec-18","07:53","18:43","","");
INSERT INTO tbl_presensi_karyawan VALUES("266","1","10025","TRIA OKTAVIANI","18-Dec-18","08:12","17:11","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("267","1","10025","TRIA OKTAVIANI","19-Dec-18","08:02","17:05","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("268","1","10025","TRIA OKTAVIANI","20-Dec-18","07:54","18:28","","");
INSERT INTO tbl_presensi_karyawan VALUES("269","1","10025","TRIA OKTAVIANI","21-Dec-18","","17:37","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("270","1","10025","TRIA OKTAVIANI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("271","1","10025","TRIA OKTAVIANI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("272","1","10025","TRIA OKTAVIANI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("273","1","10025","TRIA OKTAVIANI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("274","1","10025","TRIA OKTAVIANI","26-Dec-18","07:55","17:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("275","1","10025","TRIA OKTAVIANI","27-Dec-18","08:12","17:23","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("276","1","10025","TRIA OKTAVIANI","28-Dec-18","08:23","17:02","00:23","");
INSERT INTO tbl_presensi_karyawan VALUES("277","1","10025","TRIA OKTAVIANI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("278","1","10025","TRIA OKTAVIANI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("279","1","10025","TRIA OKTAVIANI","31-Dec-18","13:17","","05:17","");
INSERT INTO tbl_presensi_karyawan VALUES("280","1","10027","SUMARMI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("281","1","10027","SUMARMI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("282","1","10027","SUMARMI","03-Dec-18","07:56","","","");
INSERT INTO tbl_presensi_karyawan VALUES("283","1","10027","SUMARMI","04-Dec-18","","17:03","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("284","1","10027","SUMARMI","05-Dec-18","08:11","17:11","00:11","");
INSERT INTO tbl_presensi_karyawan VALUES("285","1","10027","SUMARMI","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("286","1","10027","SUMARMI","07-Dec-18","07:36","","","");
INSERT INTO tbl_presensi_karyawan VALUES("287","1","10027","SUMARMI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("288","1","10027","SUMARMI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("289","1","10027","SUMARMI","10-Dec-18","08:22","17:12","00:22","");
INSERT INTO tbl_presensi_karyawan VALUES("290","1","10027","SUMARMI","11-Dec-18","08:19","17:24","00:19","");
INSERT INTO tbl_presensi_karyawan VALUES("291","1","10027","SUMARMI","12-Dec-18","07:54","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("292","1","10027","SUMARMI","13-Dec-18","13:39","17:03","05:39","");
INSERT INTO tbl_presensi_karyawan VALUES("293","1","10027","SUMARMI","14-Dec-18","07:56","","","");
INSERT INTO tbl_presensi_karyawan VALUES("294","1","10027","SUMARMI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("295","1","10027","SUMARMI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("296","1","10027","SUMARMI","17-Dec-18","07:56","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("297","1","10027","SUMARMI","18-Dec-18","08:05","17:00","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("298","1","10027","SUMARMI","19-Dec-18","08:00","16:27","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("299","1","10027","SUMARMI","20-Dec-18","07:41","","","");
INSERT INTO tbl_presensi_karyawan VALUES("300","1","10027","SUMARMI","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("301","1","10027","SUMARMI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("302","1","10027","SUMARMI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("303","1","10027","SUMARMI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("304","1","10027","SUMARMI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("305","1","10027","SUMARMI","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("306","1","10027","SUMARMI","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("307","1","10027","SUMARMI","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("308","1","10027","SUMARMI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("309","1","10027","SUMARMI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("310","1","10027","SUMARMI","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("311","1","10029","EDMUNDUS EDY PANCANINGTY","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("312","1","10029","EDMUNDUS EDY PANCANINGTY","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("313","1","10029","EDMUNDUS EDY PANCANINGTY","03-Dec-18","08:24","","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("314","1","10029","EDMUNDUS EDY PANCANINGTY","04-Dec-18","07:40","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("315","1","10029","EDMUNDUS EDY PANCANINGTY","05-Dec-18","08:39","17:05","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("316","1","10029","EDMUNDUS EDY PANCANINGTY","06-Dec-18","12:28","16:33","04:28","");
INSERT INTO tbl_presensi_karyawan VALUES("317","1","10029","EDMUNDUS EDY PANCANINGTY","07-Dec-18","07:36","","","");
INSERT INTO tbl_presensi_karyawan VALUES("318","1","10029","EDMUNDUS EDY PANCANINGTY","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("319","1","10029","EDMUNDUS EDY PANCANINGTY","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("320","1","10029","EDMUNDUS EDY PANCANINGTY","10-Dec-18","","16:56","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("321","1","10029","EDMUNDUS EDY PANCANINGTY","11-Dec-18","08:21","17:11","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("322","1","10029","EDMUNDUS EDY PANCANINGTY","12-Dec-18","07:59","16:50","","");
INSERT INTO tbl_presensi_karyawan VALUES("323","1","10029","EDMUNDUS EDY PANCANINGTY","13-Dec-18","07:34","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("324","1","10029","EDMUNDUS EDY PANCANINGTY","14-Dec-18","07:57","","","");
INSERT INTO tbl_presensi_karyawan VALUES("325","1","10029","EDMUNDUS EDY PANCANINGTY","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("326","1","10029","EDMUNDUS EDY PANCANINGTY","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("327","1","10029","EDMUNDUS EDY PANCANINGTY","17-Dec-18","07:57","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("328","1","10029","EDMUNDUS EDY PANCANINGTY","18-Dec-18","08:06","17:00","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("329","1","10029","EDMUNDUS EDY PANCANINGTY","19-Dec-18","08:00","16:45","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("330","1","10029","EDMUNDUS EDY PANCANINGTY","20-Dec-18","07:41","","","");
INSERT INTO tbl_presensi_karyawan VALUES("331","1","10029","EDMUNDUS EDY PANCANINGTY","21-Dec-18","07:29","","","");
INSERT INTO tbl_presensi_karyawan VALUES("332","1","10029","EDMUNDUS EDY PANCANINGTY","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("333","1","10029","EDMUNDUS EDY PANCANINGTY","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("334","1","10029","EDMUNDUS EDY PANCANINGTY","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("335","1","10029","EDMUNDUS EDY PANCANINGTY","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("336","1","10029","EDMUNDUS EDY PANCANINGTY","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("337","1","10029","EDMUNDUS EDY PANCANINGTY","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("338","1","10029","EDMUNDUS EDY PANCANINGTY","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("339","1","10029","EDMUNDUS EDY PANCANINGTY","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("340","1","10029","EDMUNDUS EDY PANCANINGTY","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("341","1","10029","EDMUNDUS EDY PANCANINGTY","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("342","1","10031","KATNI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("343","1","10031","KATNI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("344","1","10031","KATNI","03-Dec-18","08:23","17:04","00:23","");
INSERT INTO tbl_presensi_karyawan VALUES("345","1","10031","KATNI","04-Dec-18","08:10","17:12","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("346","1","10031","KATNI","05-Dec-18","08:39","17:03","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("347","1","10031","KATNI","06-Dec-18","08:24","17:03","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("348","1","10031","KATNI","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("349","1","10031","KATNI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("350","1","10031","KATNI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("351","1","10031","KATNI","10-Dec-18","08:28","","00:28","");
INSERT INTO tbl_presensi_karyawan VALUES("352","1","10031","KATNI","11-Dec-18","07:59","17:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("353","1","10031","KATNI","12-Dec-18","08:28","17:13","00:28","");
INSERT INTO tbl_presensi_karyawan VALUES("354","1","10031","KATNI","13-Dec-18","08:11","17:27","00:11","");
INSERT INTO tbl_presensi_karyawan VALUES("355","1","10031","KATNI","14-Dec-18","10:09","17:05","02:09","");
INSERT INTO tbl_presensi_karyawan VALUES("356","1","10031","KATNI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("357","1","10031","KATNI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("358","1","10031","KATNI","17-Dec-18","08:11","","00:11","");
INSERT INTO tbl_presensi_karyawan VALUES("359","1","10031","KATNI","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("360","1","10031","KATNI","19-Dec-18","13:38","15:17","05:38","");
INSERT INTO tbl_presensi_karyawan VALUES("361","1","10031","KATNI","20-Dec-18","07:56","17:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("362","1","10031","KATNI","21-Dec-18","08:08","18:30","00:08","");
INSERT INTO tbl_presensi_karyawan VALUES("363","1","10031","KATNI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("364","1","10031","KATNI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("365","1","10031","KATNI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("366","1","10031","KATNI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("367","1","10031","KATNI","26-Dec-18","08:16","20:32","00:16","");
INSERT INTO tbl_presensi_karyawan VALUES("368","1","10031","KATNI","27-Dec-18","07:55","22:17","","");
INSERT INTO tbl_presensi_karyawan VALUES("369","1","10031","KATNI","28-Dec-18","08:00","20:51","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("370","1","10031","KATNI","29-Dec-18","10:38","19:25","","");
INSERT INTO tbl_presensi_karyawan VALUES("371","1","10031","KATNI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("372","1","10031","KATNI","31-Dec-18","08:17","16:14","00:17","");
INSERT INTO tbl_presensi_karyawan VALUES("373","1","D0005","IRWAN ARTIGYO SUMADIYO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("374","1","D0005","IRWAN ARTIGYO SUMADIYO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("375","1","D0005","IRWAN ARTIGYO SUMADIYO","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("376","1","D0005","IRWAN ARTIGYO SUMADIYO","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("377","1","D0005","IRWAN ARTIGYO SUMADIYO","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("378","1","D0005","IRWAN ARTIGYO SUMADIYO","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("379","1","D0005","IRWAN ARTIGYO SUMADIYO","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("380","1","D0005","IRWAN ARTIGYO SUMADIYO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("381","1","D0005","IRWAN ARTIGYO SUMADIYO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("382","1","D0005","IRWAN ARTIGYO SUMADIYO","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("383","1","D0005","IRWAN ARTIGYO SUMADIYO","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("384","1","D0005","IRWAN ARTIGYO SUMADIYO","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("385","1","D0005","IRWAN ARTIGYO SUMADIYO","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("386","1","D0005","IRWAN ARTIGYO SUMADIYO","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("387","1","D0005","IRWAN ARTIGYO SUMADIYO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("388","1","D0005","IRWAN ARTIGYO SUMADIYO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("389","1","D0005","IRWAN ARTIGYO SUMADIYO","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("390","1","D0005","IRWAN ARTIGYO SUMADIYO","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("391","1","D0005","IRWAN ARTIGYO SUMADIYO","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("392","1","D0005","IRWAN ARTIGYO SUMADIYO","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("393","1","D0005","IRWAN ARTIGYO SUMADIYO","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("394","1","D0005","IRWAN ARTIGYO SUMADIYO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("395","1","D0005","IRWAN ARTIGYO SUMADIYO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("396","1","D0005","IRWAN ARTIGYO SUMADIYO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("397","1","D0005","IRWAN ARTIGYO SUMADIYO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("398","1","D0005","IRWAN ARTIGYO SUMADIYO","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("399","1","D0005","IRWAN ARTIGYO SUMADIYO","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("400","1","D0005","IRWAN ARTIGYO SUMADIYO","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("401","1","D0005","IRWAN ARTIGYO SUMADIYO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("402","1","D0005","IRWAN ARTIGYO SUMADIYO","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("403","1","D0005","IRWAN ARTIGYO SUMADIYO","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("404","1","PK088","ARIEF FAUZI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("405","1","PK088","ARIEF FAUZI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("406","1","PK088","ARIEF FAUZI","03-Dec-18","07:29","16:55","","");
INSERT INTO tbl_presensi_karyawan VALUES("407","1","PK088","ARIEF FAUZI","04-Dec-18","08:44","22:05","00:44","");
INSERT INTO tbl_presensi_karyawan VALUES("408","1","PK088","ARIEF FAUZI","05-Dec-18","08:22","20:28","00:22","");
INSERT INTO tbl_presensi_karyawan VALUES("409","1","PK088","ARIEF FAUZI","06-Dec-18","08:15","18:37","00:15","");
INSERT INTO tbl_presensi_karyawan VALUES("410","1","PK088","ARIEF FAUZI","07-Dec-18","08:18","17:57","00:18","");
INSERT INTO tbl_presensi_karyawan VALUES("411","1","PK088","ARIEF FAUZI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("412","1","PK088","ARIEF FAUZI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("413","1","PK088","ARIEF FAUZI","10-Dec-18","08:01","18:05","00:01","");
INSERT INTO tbl_presensi_karyawan VALUES("414","1","PK088","ARIEF FAUZI","11-Dec-18","07:28","17:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("415","1","PK088","ARIEF FAUZI","12-Dec-18","07:55","19:12","","");
INSERT INTO tbl_presensi_karyawan VALUES("416","1","PK088","ARIEF FAUZI","13-Dec-18","08:02","20:43","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("417","1","PK088","ARIEF FAUZI","14-Dec-18","08:14","18:19","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("418","1","PK088","ARIEF FAUZI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("419","1","PK088","ARIEF FAUZI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("420","1","PK088","ARIEF FAUZI","17-Dec-18","07:18","","","");
INSERT INTO tbl_presensi_karyawan VALUES("421","1","PK088","ARIEF FAUZI","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("422","1","PK088","ARIEF FAUZI","19-Dec-18","13:25","","05:25","");
INSERT INTO tbl_presensi_karyawan VALUES("423","1","PK088","ARIEF FAUZI","20-Dec-18","07:32","17:30","","");
INSERT INTO tbl_presensi_karyawan VALUES("424","1","PK088","ARIEF FAUZI","21-Dec-18","07:24","19:28","","");
INSERT INTO tbl_presensi_karyawan VALUES("425","1","PK088","ARIEF FAUZI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("426","1","PK088","ARIEF FAUZI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("427","1","PK088","ARIEF FAUZI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("428","1","PK088","ARIEF FAUZI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("429","1","PK088","ARIEF FAUZI","26-Dec-18","08:07","17:12","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("430","1","PK088","ARIEF FAUZI","27-Dec-18","07:43","22:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("431","1","PK088","ARIEF FAUZI","28-Dec-18","08:02","22:28","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("432","1","PK088","ARIEF FAUZI","29-Dec-18","11:19","19:16","","");
INSERT INTO tbl_presensi_karyawan VALUES("433","1","PK088","ARIEF FAUZI","30-Dec-18","11:02","19:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("434","1","PK088","ARIEF FAUZI","31-Dec-18","07:34","17:49","","");
INSERT INTO tbl_presensi_karyawan VALUES("435","1","PK102","HERDWIN NOFRIAN","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("436","1","PK102","HERDWIN NOFRIAN","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("437","1","PK102","HERDWIN NOFRIAN","03-Dec-18","13:45","","05:45","");
INSERT INTO tbl_presensi_karyawan VALUES("438","1","PK102","HERDWIN NOFRIAN","04-Dec-18","08:01","17:16","00:01","");
INSERT INTO tbl_presensi_karyawan VALUES("439","1","PK102","HERDWIN NOFRIAN","05-Dec-18","08:32","19:40","00:32","");
INSERT INTO tbl_presensi_karyawan VALUES("440","1","PK102","HERDWIN NOFRIAN","06-Dec-18","08:36","","00:36","");
INSERT INTO tbl_presensi_karyawan VALUES("441","1","PK102","HERDWIN NOFRIAN","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("442","1","PK102","HERDWIN NOFRIAN","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("443","1","PK102","HERDWIN NOFRIAN","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("444","1","PK102","HERDWIN NOFRIAN","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("445","1","PK102","HERDWIN NOFRIAN","11-Dec-18","09:01","17:27","01:01","");
INSERT INTO tbl_presensi_karyawan VALUES("446","1","PK102","HERDWIN NOFRIAN","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("447","1","PK102","HERDWIN NOFRIAN","13-Dec-18","08:47","","00:47","");
INSERT INTO tbl_presensi_karyawan VALUES("448","1","PK102","HERDWIN NOFRIAN","14-Dec-18","08:48","17:54","00:48","");
INSERT INTO tbl_presensi_karyawan VALUES("449","1","PK102","HERDWIN NOFRIAN","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("450","1","PK102","HERDWIN NOFRIAN","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("451","1","PK102","HERDWIN NOFRIAN","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("452","1","PK102","HERDWIN NOFRIAN","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("453","1","PK102","HERDWIN NOFRIAN","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("454","1","PK102","HERDWIN NOFRIAN","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("455","1","PK102","HERDWIN NOFRIAN","21-Dec-18","09:03","","01:03","");
INSERT INTO tbl_presensi_karyawan VALUES("456","1","PK102","HERDWIN NOFRIAN","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("457","1","PK102","HERDWIN NOFRIAN","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("458","1","PK102","HERDWIN NOFRIAN","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("459","1","PK102","HERDWIN NOFRIAN","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("460","1","PK102","HERDWIN NOFRIAN","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("461","1","PK102","HERDWIN NOFRIAN","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("462","1","PK102","HERDWIN NOFRIAN","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("463","1","PK102","HERDWIN NOFRIAN","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("464","1","PK102","HERDWIN NOFRIAN","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("465","1","PK102","HERDWIN NOFRIAN","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("466","1","PK058","ANANG DAUS SOEMANTRI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("467","1","PK058","ANANG DAUS SOEMANTRI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("468","1","PK058","ANANG DAUS SOEMANTRI","03-Dec-18","06:33","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("469","1","PK058","ANANG DAUS SOEMANTRI","04-Dec-18","06:37","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("470","1","PK058","ANANG DAUS SOEMANTRI","05-Dec-18","06:29","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("471","1","PK058","ANANG DAUS SOEMANTRI","06-Dec-18","06:32","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("472","1","PK058","ANANG DAUS SOEMANTRI","07-Dec-18","06:31","","","");
INSERT INTO tbl_presensi_karyawan VALUES("473","1","PK058","ANANG DAUS SOEMANTRI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("474","1","PK058","ANANG DAUS SOEMANTRI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("475","1","PK058","ANANG DAUS SOEMANTRI","10-Dec-18","06:34","16:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("476","1","PK058","ANANG DAUS SOEMANTRI","11-Dec-18","06:49","15:34","","");
INSERT INTO tbl_presensi_karyawan VALUES("477","1","PK058","ANANG DAUS SOEMANTRI","12-Dec-18","06:35","16:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("478","1","PK058","ANANG DAUS SOEMANTRI","13-Dec-18","06:33","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("479","1","PK058","ANANG DAUS SOEMANTRI","14-Dec-18","06:41","16:35","","");
INSERT INTO tbl_presensi_karyawan VALUES("480","1","PK058","ANANG DAUS SOEMANTRI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("481","1","PK058","ANANG DAUS SOEMANTRI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("482","1","PK058","ANANG DAUS SOEMANTRI","17-Dec-18","06:55","16:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("483","1","PK058","ANANG DAUS SOEMANTRI","18-Dec-18","08:15","17:00","00:15","");
INSERT INTO tbl_presensi_karyawan VALUES("484","1","PK058","ANANG DAUS SOEMANTRI","19-Dec-18","06:37","16:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("485","1","PK058","ANANG DAUS SOEMANTRI","20-Dec-18","06:35","","","");
INSERT INTO tbl_presensi_karyawan VALUES("486","1","PK058","ANANG DAUS SOEMANTRI","21-Dec-18","06:30","16:35","","");
INSERT INTO tbl_presensi_karyawan VALUES("487","1","PK058","ANANG DAUS SOEMANTRI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("488","1","PK058","ANANG DAUS SOEMANTRI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("489","1","PK058","ANANG DAUS SOEMANTRI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("490","1","PK058","ANANG DAUS SOEMANTRI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("491","1","PK058","ANANG DAUS SOEMANTRI","26-Dec-18","06:31","16:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("492","1","PK058","ANANG DAUS SOEMANTRI","27-Dec-18","06:39","16:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("493","1","PK058","ANANG DAUS SOEMANTRI","28-Dec-18","06:26","16:29","","");
INSERT INTO tbl_presensi_karyawan VALUES("494","1","PK058","ANANG DAUS SOEMANTRI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("495","1","PK058","ANANG DAUS SOEMANTRI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("496","1","PK058","ANANG DAUS SOEMANTRI","31-Dec-18","06:27","","","");
INSERT INTO tbl_presensi_karyawan VALUES("497","1","PK073","VISHNU DAMAR SASONGKO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("498","1","PK073","VISHNU DAMAR SASONGKO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("499","1","PK073","VISHNU DAMAR SASONGKO","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("500","1","PK073","VISHNU DAMAR SASONGKO","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("501","1","PK073","VISHNU DAMAR SASONGKO","05-Dec-18","07:36","17:21","","");
INSERT INTO tbl_presensi_karyawan VALUES("502","1","PK073","VISHNU DAMAR SASONGKO","06-Dec-18","08:14","17:11","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("503","1","PK073","VISHNU DAMAR SASONGKO","07-Dec-18","10:19","15:04","02:19","");
INSERT INTO tbl_presensi_karyawan VALUES("504","1","PK073","VISHNU DAMAR SASONGKO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("505","1","PK073","VISHNU DAMAR SASONGKO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("506","1","PK073","VISHNU DAMAR SASONGKO","10-Dec-18","07:32","18:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("507","1","PK073","VISHNU DAMAR SASONGKO","11-Dec-18","07:16","17:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("508","1","PK073","VISHNU DAMAR SASONGKO","12-Dec-18","07:37","","","");
INSERT INTO tbl_presensi_karyawan VALUES("509","1","PK073","VISHNU DAMAR SASONGKO","13-Dec-18","07:17","17:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("510","1","PK073","VISHNU DAMAR SASONGKO","14-Dec-18","10:32","17:29","02:32","");
INSERT INTO tbl_presensi_karyawan VALUES("511","1","PK073","VISHNU DAMAR SASONGKO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("512","1","PK073","VISHNU DAMAR SASONGKO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("513","1","PK073","VISHNU DAMAR SASONGKO","17-Dec-18","07:17","","","");
INSERT INTO tbl_presensi_karyawan VALUES("514","1","PK073","VISHNU DAMAR SASONGKO","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("515","1","PK073","VISHNU DAMAR SASONGKO","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("516","1","PK073","VISHNU DAMAR SASONGKO","20-Dec-18","08:10","17:14","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("517","1","PK073","VISHNU DAMAR SASONGKO","21-Dec-18","10:26","17:09","02:26","");
INSERT INTO tbl_presensi_karyawan VALUES("518","1","PK073","VISHNU DAMAR SASONGKO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("519","1","PK073","VISHNU DAMAR SASONGKO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("520","1","PK073","VISHNU DAMAR SASONGKO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("521","1","PK073","VISHNU DAMAR SASONGKO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("522","1","PK073","VISHNU DAMAR SASONGKO","26-Dec-18","08:40","20:36","00:40","");
INSERT INTO tbl_presensi_karyawan VALUES("523","1","PK073","VISHNU DAMAR SASONGKO","27-Dec-18","07:54","20:31","","");
INSERT INTO tbl_presensi_karyawan VALUES("524","1","PK073","VISHNU DAMAR SASONGKO","28-Dec-18","10:23","17:14","02:23","");
INSERT INTO tbl_presensi_karyawan VALUES("525","1","PK073","VISHNU DAMAR SASONGKO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("526","1","PK073","VISHNU DAMAR SASONGKO","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("527","1","PK073","VISHNU DAMAR SASONGKO","31-Dec-18","07:38","","","");
INSERT INTO tbl_presensi_karyawan VALUES("528","1","PK074","G.HERYAWAN INDRAYATNA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("529","1","PK074","G.HERYAWAN INDRAYATNA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("530","1","PK074","G.HERYAWAN INDRAYATNA","03-Dec-18","07:51","15:30","","");
INSERT INTO tbl_presensi_karyawan VALUES("531","1","PK074","G.HERYAWAN INDRAYATNA","04-Dec-18","08:13","15:27","00:13","");
INSERT INTO tbl_presensi_karyawan VALUES("532","1","PK074","G.HERYAWAN INDRAYATNA","05-Dec-18","07:58","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("533","1","PK074","G.HERYAWAN INDRAYATNA","06-Dec-18","07:47","17:19","","");
INSERT INTO tbl_presensi_karyawan VALUES("534","1","PK074","G.HERYAWAN INDRAYATNA","07-Dec-18","07:46","15:32","","");
INSERT INTO tbl_presensi_karyawan VALUES("535","1","PK074","G.HERYAWAN INDRAYATNA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("536","1","PK074","G.HERYAWAN INDRAYATNA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("537","1","PK074","G.HERYAWAN INDRAYATNA","10-Dec-18","09:23","17:00","01:23","");
INSERT INTO tbl_presensi_karyawan VALUES("538","1","PK074","G.HERYAWAN INDRAYATNA","11-Dec-18","07:39","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("539","1","PK074","G.HERYAWAN INDRAYATNA","12-Dec-18","07:47","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("540","1","PK074","G.HERYAWAN INDRAYATNA","13-Dec-18","07:40","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("541","1","PK074","G.HERYAWAN INDRAYATNA","14-Dec-18","07:38","15:32","","");
INSERT INTO tbl_presensi_karyawan VALUES("542","1","PK074","G.HERYAWAN INDRAYATNA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("543","1","PK074","G.HERYAWAN INDRAYATNA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("544","1","PK074","G.HERYAWAN INDRAYATNA","17-Dec-18","07:52","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("545","1","PK074","G.HERYAWAN INDRAYATNA","18-Dec-18","07:42","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("546","1","PK074","G.HERYAWAN INDRAYATNA","19-Dec-18","07:37","","","");
INSERT INTO tbl_presensi_karyawan VALUES("547","1","PK074","G.HERYAWAN INDRAYATNA","20-Dec-18","07:41","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("548","1","PK074","G.HERYAWAN INDRAYATNA","21-Dec-18","07:42","17:35","","");
INSERT INTO tbl_presensi_karyawan VALUES("549","1","PK074","G.HERYAWAN INDRAYATNA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("550","1","PK074","G.HERYAWAN INDRAYATNA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("551","1","PK074","G.HERYAWAN INDRAYATNA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("552","1","PK074","G.HERYAWAN INDRAYATNA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("553","1","PK074","G.HERYAWAN INDRAYATNA","26-Dec-18","07:39","15:34","","");
INSERT INTO tbl_presensi_karyawan VALUES("554","1","PK074","G.HERYAWAN INDRAYATNA","27-Dec-18","09:23","17:04","01:23","");
INSERT INTO tbl_presensi_karyawan VALUES("555","1","PK074","G.HERYAWAN INDRAYATNA","28-Dec-18","07:36","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("556","1","PK074","G.HERYAWAN INDRAYATNA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("557","1","PK074","G.HERYAWAN INDRAYATNA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("558","1","PK074","G.HERYAWAN INDRAYATNA","31-Dec-18","07:40","","","");
INSERT INTO tbl_presensi_karyawan VALUES("559","1","PK020","IBNU SARJONO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("560","1","PK020","IBNU SARJONO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("561","1","PK020","IBNU SARJONO","03-Dec-18","07:27","18:14","","");
INSERT INTO tbl_presensi_karyawan VALUES("562","1","PK020","IBNU SARJONO","04-Dec-18","07:28","18:26","","");
INSERT INTO tbl_presensi_karyawan VALUES("563","1","PK020","IBNU SARJONO","05-Dec-18","07:43","20:28","","");
INSERT INTO tbl_presensi_karyawan VALUES("564","1","PK020","IBNU SARJONO","06-Dec-18","07:35","18:51","","");
INSERT INTO tbl_presensi_karyawan VALUES("565","1","PK020","IBNU SARJONO","07-Dec-18","07:57","17:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("566","1","PK020","IBNU SARJONO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("567","1","PK020","IBNU SARJONO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("568","1","PK020","IBNU SARJONO","10-Dec-18","07:49","18:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("569","1","PK020","IBNU SARJONO","11-Dec-18","07:31","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("570","1","PK020","IBNU SARJONO","12-Dec-18","07:41","17:21","","");
INSERT INTO tbl_presensi_karyawan VALUES("571","1","PK020","IBNU SARJONO","13-Dec-18","07:52","17:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("572","1","PK020","IBNU SARJONO","14-Dec-18","08:10","17:44","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("573","1","PK020","IBNU SARJONO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("574","1","PK020","IBNU SARJONO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("575","1","PK020","IBNU SARJONO","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("576","1","PK020","IBNU SARJONO","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("577","1","PK020","IBNU SARJONO","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("578","1","PK020","IBNU SARJONO","20-Dec-18","07:46","17:30","","");
INSERT INTO tbl_presensi_karyawan VALUES("579","1","PK020","IBNU SARJONO","21-Dec-18","07:37","19:29","","");
INSERT INTO tbl_presensi_karyawan VALUES("580","1","PK020","IBNU SARJONO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("581","1","PK020","IBNU SARJONO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("582","1","PK020","IBNU SARJONO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("583","1","PK020","IBNU SARJONO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("584","1","PK020","IBNU SARJONO","26-Dec-18","13:41","22:42","05:41","");
INSERT INTO tbl_presensi_karyawan VALUES("585","1","PK020","IBNU SARJONO","27-Dec-18","07:52","22:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("586","1","PK020","IBNU SARJONO","28-Dec-18","13:21","22:29","05:21","");
INSERT INTO tbl_presensi_karyawan VALUES("587","1","PK020","IBNU SARJONO","29-Dec-18","12:19","19:19","","");
INSERT INTO tbl_presensi_karyawan VALUES("588","1","PK020","IBNU SARJONO","30-Dec-18","10:23","19:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("589","1","PK020","IBNU SARJONO","31-Dec-18","08:24","17:50","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("590","1","PK023","WIDYADJI SASONO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("591","1","PK023","WIDYADJI SASONO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("592","1","PK023","WIDYADJI SASONO","03-Dec-18","07:55","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("593","1","PK023","WIDYADJI SASONO","04-Dec-18","07:52","17:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("594","1","PK023","WIDYADJI SASONO","05-Dec-18","10:35","19:38","02:35","");
INSERT INTO tbl_presensi_karyawan VALUES("595","1","PK023","WIDYADJI SASONO","06-Dec-18","08:05","17:57","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("596","1","PK023","WIDYADJI SASONO","07-Dec-18","07:48","18:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("597","1","PK023","WIDYADJI SASONO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("598","1","PK023","WIDYADJI SASONO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("599","1","PK023","WIDYADJI SASONO","10-Dec-18","09:37","18:00","01:37","");
INSERT INTO tbl_presensi_karyawan VALUES("600","1","PK023","WIDYADJI SASONO","11-Dec-18","14:22","17:09","06:22","");
INSERT INTO tbl_presensi_karyawan VALUES("601","1","PK023","WIDYADJI SASONO","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("602","1","PK023","WIDYADJI SASONO","13-Dec-18","07:55","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("603","1","PK023","WIDYADJI SASONO","14-Dec-18","08:12","17:24","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("604","1","PK023","WIDYADJI SASONO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("605","1","PK023","WIDYADJI SASONO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("606","1","PK023","WIDYADJI SASONO","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("607","1","PK023","WIDYADJI SASONO","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("608","1","PK023","WIDYADJI SASONO","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("609","1","PK023","WIDYADJI SASONO","20-Dec-18","07:41","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("610","1","PK023","WIDYADJI SASONO","21-Dec-18","07:48","","","");
INSERT INTO tbl_presensi_karyawan VALUES("611","1","PK023","WIDYADJI SASONO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("612","1","PK023","WIDYADJI SASONO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("613","1","PK023","WIDYADJI SASONO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("614","1","PK023","WIDYADJI SASONO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("615","1","PK023","WIDYADJI SASONO","26-Dec-18","07:52","22:42","","");
INSERT INTO tbl_presensi_karyawan VALUES("616","1","PK023","WIDYADJI SASONO","27-Dec-18","06:47","22:31","","");
INSERT INTO tbl_presensi_karyawan VALUES("617","1","PK023","WIDYADJI SASONO","28-Dec-18","07:45","21:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("618","1","PK023","WIDYADJI SASONO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("619","1","PK023","WIDYADJI SASONO","30-Dec-18","09:58","18:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("620","1","PK023","WIDYADJI SASONO","31-Dec-18","07:53","15:26","","");
INSERT INTO tbl_presensi_karyawan VALUES("621","1","PK024","RIYEN HARYANI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("622","1","PK024","RIYEN HARYANI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("623","1","PK024","RIYEN HARYANI","03-Dec-18","","17:09","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("624","1","PK024","RIYEN HARYANI","04-Dec-18","11:52","","03:52","");
INSERT INTO tbl_presensi_karyawan VALUES("625","1","PK024","RIYEN HARYANI","05-Dec-18","08:28","17:40","00:28","");
INSERT INTO tbl_presensi_karyawan VALUES("626","1","PK024","RIYEN HARYANI","06-Dec-18","08:21","16:50","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("627","1","PK024","RIYEN HARYANI","07-Dec-18","08:10","16:53","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("628","1","PK024","RIYEN HARYANI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("629","1","PK024","RIYEN HARYANI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("630","1","PK024","RIYEN HARYANI","10-Dec-18","14:09","16:53","06:09","");
INSERT INTO tbl_presensi_karyawan VALUES("631","1","PK024","RIYEN HARYANI","11-Dec-18","08:17","17:21","00:17","");
INSERT INTO tbl_presensi_karyawan VALUES("632","1","PK024","RIYEN HARYANI","12-Dec-18","","18:23","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("633","1","PK024","RIYEN HARYANI","13-Dec-18","","19:21","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("634","1","PK024","RIYEN HARYANI","14-Dec-18","","17:50","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("635","1","PK024","RIYEN HARYANI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("636","1","PK024","RIYEN HARYANI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("637","1","PK024","RIYEN HARYANI","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("638","1","PK024","RIYEN HARYANI","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("639","1","PK024","RIYEN HARYANI","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("640","1","PK024","RIYEN HARYANI","20-Dec-18","08:27","17:17","00:27","");
INSERT INTO tbl_presensi_karyawan VALUES("641","1","PK024","RIYEN HARYANI","21-Dec-18","08:22","17:08","00:22","");
INSERT INTO tbl_presensi_karyawan VALUES("642","1","PK024","RIYEN HARYANI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("643","1","PK024","RIYEN HARYANI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("644","1","PK024","RIYEN HARYANI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("645","1","PK024","RIYEN HARYANI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("646","1","PK024","RIYEN HARYANI","26-Dec-18","09:45","","01:45","");
INSERT INTO tbl_presensi_karyawan VALUES("647","1","PK024","RIYEN HARYANI","27-Dec-18","08:36","22:30","00:36","");
INSERT INTO tbl_presensi_karyawan VALUES("648","1","PK024","RIYEN HARYANI","28-Dec-18","08:56","21:43","00:56","");
INSERT INTO tbl_presensi_karyawan VALUES("649","1","PK024","RIYEN HARYANI","29-Dec-18","10:29","19:22","","");
INSERT INTO tbl_presensi_karyawan VALUES("650","1","PK024","RIYEN HARYANI","30-Dec-18","10:59","18:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("651","1","PK024","RIYEN HARYANI","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("652","1","PK025","RISMA NURJANNAH","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("653","1","PK025","RISMA NURJANNAH","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("654","1","PK025","RISMA NURJANNAH","03-Dec-18","08:59","17:30","00:59","");
INSERT INTO tbl_presensi_karyawan VALUES("655","1","PK025","RISMA NURJANNAH","04-Dec-18","08:59","17:30","00:59","");
INSERT INTO tbl_presensi_karyawan VALUES("656","1","PK025","RISMA NURJANNAH","05-Dec-18","08:48","17:13","00:48","");
INSERT INTO tbl_presensi_karyawan VALUES("657","1","PK025","RISMA NURJANNAH","06-Dec-18","08:55","17:57","00:55","");
INSERT INTO tbl_presensi_karyawan VALUES("658","1","PK025","RISMA NURJANNAH","07-Dec-18","08:55","17:59","00:55","");
INSERT INTO tbl_presensi_karyawan VALUES("659","1","PK025","RISMA NURJANNAH","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("660","1","PK025","RISMA NURJANNAH","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("661","1","PK025","RISMA NURJANNAH","10-Dec-18","08:39","18:00","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("662","1","PK025","RISMA NURJANNAH","11-Dec-18","08:55","17:24","00:55","");
INSERT INTO tbl_presensi_karyawan VALUES("663","1","PK025","RISMA NURJANNAH","12-Dec-18","08:51","17:19","00:51","");
INSERT INTO tbl_presensi_karyawan VALUES("664","1","PK025","RISMA NURJANNAH","13-Dec-18","08:53","18:33","00:53","");
INSERT INTO tbl_presensi_karyawan VALUES("665","1","PK025","RISMA NURJANNAH","14-Dec-18","08:57","17:25","00:57","");
INSERT INTO tbl_presensi_karyawan VALUES("666","1","PK025","RISMA NURJANNAH","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("667","1","PK025","RISMA NURJANNAH","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("668","1","PK025","RISMA NURJANNAH","17-Dec-18","08:54","17:22","00:54","");
INSERT INTO tbl_presensi_karyawan VALUES("669","1","PK025","RISMA NURJANNAH","18-Dec-18","08:52","17:04","00:52","");
INSERT INTO tbl_presensi_karyawan VALUES("670","1","PK025","RISMA NURJANNAH","19-Dec-18","08:52","17:12","00:52","");
INSERT INTO tbl_presensi_karyawan VALUES("671","1","PK025","RISMA NURJANNAH","20-Dec-18","08:15","16:18","00:15","");
INSERT INTO tbl_presensi_karyawan VALUES("672","1","PK025","RISMA NURJANNAH","21-Dec-18","08:44","17:10","00:44","");
INSERT INTO tbl_presensi_karyawan VALUES("673","1","PK025","RISMA NURJANNAH","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("674","1","PK025","RISMA NURJANNAH","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("675","1","PK025","RISMA NURJANNAH","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("676","1","PK025","RISMA NURJANNAH","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("677","1","PK025","RISMA NURJANNAH","26-Dec-18","10:35","18:09","02:35","");
INSERT INTO tbl_presensi_karyawan VALUES("678","1","PK025","RISMA NURJANNAH","27-Dec-18","08:51","17:35","00:51","");
INSERT INTO tbl_presensi_karyawan VALUES("679","1","PK025","RISMA NURJANNAH","28-Dec-18","08:54","15:17","00:54","");
INSERT INTO tbl_presensi_karyawan VALUES("680","1","PK025","RISMA NURJANNAH","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("681","1","PK025","RISMA NURJANNAH","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("682","1","PK025","RISMA NURJANNAH","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("683","1","PK027","GATRI AYUNING LESTARI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("684","1","PK027","GATRI AYUNING LESTARI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("685","1","PK027","GATRI AYUNING LESTARI","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("686","1","PK027","GATRI AYUNING LESTARI","04-Dec-18","08:09","17:11","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("687","1","PK027","GATRI AYUNING LESTARI","05-Dec-18","08:21","17:41","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("688","1","PK027","GATRI AYUNING LESTARI","06-Dec-18","08:57","17:38","00:57","");
INSERT INTO tbl_presensi_karyawan VALUES("689","1","PK027","GATRI AYUNING LESTARI","07-Dec-18","09:23","17:08","01:23","");
INSERT INTO tbl_presensi_karyawan VALUES("690","1","PK027","GATRI AYUNING LESTARI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("691","1","PK027","GATRI AYUNING LESTARI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("692","1","PK027","GATRI AYUNING LESTARI","10-Dec-18","08:52","17:42","00:52","");
INSERT INTO tbl_presensi_karyawan VALUES("693","1","PK027","GATRI AYUNING LESTARI","11-Dec-18","09:01","16:59","01:01","");
INSERT INTO tbl_presensi_karyawan VALUES("694","1","PK027","GATRI AYUNING LESTARI","12-Dec-18","08:59","","00:59","");
INSERT INTO tbl_presensi_karyawan VALUES("695","1","PK027","GATRI AYUNING LESTARI","13-Dec-18","","19:15","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("696","1","PK027","GATRI AYUNING LESTARI","14-Dec-18","08:39","17:29","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("697","1","PK027","GATRI AYUNING LESTARI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("698","1","PK027","GATRI AYUNING LESTARI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("699","1","PK027","GATRI AYUNING LESTARI","17-Dec-18","06:42","","","");
INSERT INTO tbl_presensi_karyawan VALUES("700","1","PK027","GATRI AYUNING LESTARI","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("701","1","PK027","GATRI AYUNING LESTARI","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("702","1","PK027","GATRI AYUNING LESTARI","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("703","1","PK027","GATRI AYUNING LESTARI","21-Dec-18","08:22","19:19","00:22","");
INSERT INTO tbl_presensi_karyawan VALUES("704","1","PK027","GATRI AYUNING LESTARI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("705","1","PK027","GATRI AYUNING LESTARI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("706","1","PK027","GATRI AYUNING LESTARI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("707","1","PK027","GATRI AYUNING LESTARI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("708","1","PK027","GATRI AYUNING LESTARI","26-Dec-18","08:37","22:42","00:37","");
INSERT INTO tbl_presensi_karyawan VALUES("709","1","PK027","GATRI AYUNING LESTARI","27-Dec-18","08:35","22:31","00:35","");
INSERT INTO tbl_presensi_karyawan VALUES("710","1","PK027","GATRI AYUNING LESTARI","28-Dec-18","08:53","21:43","00:53","");
INSERT INTO tbl_presensi_karyawan VALUES("711","1","PK027","GATRI AYUNING LESTARI","29-Dec-18","10:20","19:25","","");
INSERT INTO tbl_presensi_karyawan VALUES("712","1","PK027","GATRI AYUNING LESTARI","30-Dec-18","10:17","18:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("713","1","PK027","GATRI AYUNING LESTARI","31-Dec-18","08:58","15:26","00:58","");
INSERT INTO tbl_presensi_karyawan VALUES("714","1","PK028","KEVIN DWIAGY EMERALD","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("715","1","PK028","KEVIN DWIAGY EMERALD","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("716","1","PK028","KEVIN DWIAGY EMERALD","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("717","1","PK028","KEVIN DWIAGY EMERALD","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("718","1","PK028","KEVIN DWIAGY EMERALD","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("719","1","PK028","KEVIN DWIAGY EMERALD","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("720","1","PK028","KEVIN DWIAGY EMERALD","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("721","1","PK028","KEVIN DWIAGY EMERALD","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("722","1","PK028","KEVIN DWIAGY EMERALD","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("723","1","PK028","KEVIN DWIAGY EMERALD","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("724","1","PK028","KEVIN DWIAGY EMERALD","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("725","1","PK028","KEVIN DWIAGY EMERALD","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("726","1","PK028","KEVIN DWIAGY EMERALD","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("727","1","PK028","KEVIN DWIAGY EMERALD","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("728","1","PK028","KEVIN DWIAGY EMERALD","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("729","1","PK028","KEVIN DWIAGY EMERALD","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("730","1","PK028","KEVIN DWIAGY EMERALD","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("731","1","PK028","KEVIN DWIAGY EMERALD","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("732","1","PK028","KEVIN DWIAGY EMERALD","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("733","1","PK028","KEVIN DWIAGY EMERALD","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("734","1","PK028","KEVIN DWIAGY EMERALD","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("735","1","PK028","KEVIN DWIAGY EMERALD","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("736","1","PK028","KEVIN DWIAGY EMERALD","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("737","1","PK028","KEVIN DWIAGY EMERALD","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("738","1","PK028","KEVIN DWIAGY EMERALD","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("739","1","PK028","KEVIN DWIAGY EMERALD","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("740","1","PK028","KEVIN DWIAGY EMERALD","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("741","1","PK028","KEVIN DWIAGY EMERALD","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("742","1","PK028","KEVIN DWIAGY EMERALD","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("743","1","PK028","KEVIN DWIAGY EMERALD","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("744","1","PK028","KEVIN DWIAGY EMERALD","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("745","1","PK031","ABDURRAHMAN","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("746","1","PK031","ABDURRAHMAN","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("747","1","PK031","ABDURRAHMAN","03-Dec-18","09:13","16:12","01:13","");
INSERT INTO tbl_presensi_karyawan VALUES("748","1","PK031","ABDURRAHMAN","04-Dec-18","10:35","20:21","02:35","");
INSERT INTO tbl_presensi_karyawan VALUES("749","1","PK031","ABDURRAHMAN","05-Dec-18","08:17","19:16","00:17","");
INSERT INTO tbl_presensi_karyawan VALUES("750","1","PK031","ABDURRAHMAN","06-Dec-18","08:53","18:30","00:53","");
INSERT INTO tbl_presensi_karyawan VALUES("751","1","PK031","ABDURRAHMAN","07-Dec-18","08:36","18:35","00:36","");
INSERT INTO tbl_presensi_karyawan VALUES("752","1","PK031","ABDURRAHMAN","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("753","1","PK031","ABDURRAHMAN","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("754","1","PK031","ABDURRAHMAN","10-Dec-18","08:21","18:06","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("755","1","PK031","ABDURRAHMAN","11-Dec-18","08:30","","00:30","");
INSERT INTO tbl_presensi_karyawan VALUES("756","1","PK031","ABDURRAHMAN","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("757","1","PK031","ABDURRAHMAN","13-Dec-18","08:18","18:58","00:18","");
INSERT INTO tbl_presensi_karyawan VALUES("758","1","PK031","ABDURRAHMAN","14-Dec-18","08:06","","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("759","1","PK031","ABDURRAHMAN","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("760","1","PK031","ABDURRAHMAN","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("761","1","PK031","ABDURRAHMAN","17-Dec-18","08:14","19:07","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("762","1","PK031","ABDURRAHMAN","18-Dec-18","08:10","19:45","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("763","1","PK031","ABDURRAHMAN","19-Dec-18","08:08","18:25","00:08","");
INSERT INTO tbl_presensi_karyawan VALUES("764","1","PK031","ABDURRAHMAN","20-Dec-18","08:03","17:55","00:03","");
INSERT INTO tbl_presensi_karyawan VALUES("765","1","PK031","ABDURRAHMAN","21-Dec-18","08:06","19:37","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("766","1","PK031","ABDURRAHMAN","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("767","1","PK031","ABDURRAHMAN","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("768","1","PK031","ABDURRAHMAN","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("769","1","PK031","ABDURRAHMAN","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("770","1","PK031","ABDURRAHMAN","26-Dec-18","08:08","","00:08","");
INSERT INTO tbl_presensi_karyawan VALUES("771","1","PK031","ABDURRAHMAN","27-Dec-18","08:19","18:39","00:19","");
INSERT INTO tbl_presensi_karyawan VALUES("772","1","PK031","ABDURRAHMAN","28-Dec-18","08:22","18:10","00:22","");
INSERT INTO tbl_presensi_karyawan VALUES("773","1","PK031","ABDURRAHMAN","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("774","1","PK031","ABDURRAHMAN","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("775","1","PK031","ABDURRAHMAN","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("776","1","PK036","SITI ROSMAYANTI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("777","1","PK036","SITI ROSMAYANTI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("778","1","PK036","SITI ROSMAYANTI","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("779","1","PK036","SITI ROSMAYANTI","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("780","1","PK036","SITI ROSMAYANTI","05-Dec-18","08:07","17:04","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("781","1","PK036","SITI ROSMAYANTI","06-Dec-18","","17:00","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("782","1","PK036","SITI ROSMAYANTI","07-Dec-18","08:25","","00:25","");
INSERT INTO tbl_presensi_karyawan VALUES("783","1","PK036","SITI ROSMAYANTI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("784","1","PK036","SITI ROSMAYANTI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("785","1","PK036","SITI ROSMAYANTI","10-Dec-18","","17:27","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("786","1","PK036","SITI ROSMAYANTI","11-Dec-18","07:24","17:15","","");
INSERT INTO tbl_presensi_karyawan VALUES("787","1","PK036","SITI ROSMAYANTI","12-Dec-18","08:53","17:37","00:53","");
INSERT INTO tbl_presensi_karyawan VALUES("788","1","PK036","SITI ROSMAYANTI","13-Dec-18","07:59","17:47","","");
INSERT INTO tbl_presensi_karyawan VALUES("789","1","PK036","SITI ROSMAYANTI","14-Dec-18","08:00","","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("790","1","PK036","SITI ROSMAYANTI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("791","1","PK036","SITI ROSMAYANTI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("792","1","PK036","SITI ROSMAYANTI","17-Dec-18","08:03","17:35","00:03","");
INSERT INTO tbl_presensi_karyawan VALUES("793","1","PK036","SITI ROSMAYANTI","18-Dec-18","08:12","","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("794","1","PK036","SITI ROSMAYANTI","19-Dec-18","08:37","","00:37","");
INSERT INTO tbl_presensi_karyawan VALUES("795","1","PK036","SITI ROSMAYANTI","20-Dec-18","08:37","17:57","00:37","");
INSERT INTO tbl_presensi_karyawan VALUES("796","1","PK036","SITI ROSMAYANTI","21-Dec-18","08:12","","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("797","1","PK036","SITI ROSMAYANTI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("798","1","PK036","SITI ROSMAYANTI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("799","1","PK036","SITI ROSMAYANTI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("800","1","PK036","SITI ROSMAYANTI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("801","1","PK036","SITI ROSMAYANTI","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("802","1","PK036","SITI ROSMAYANTI","27-Dec-18","07:55","17:15","","");
INSERT INTO tbl_presensi_karyawan VALUES("803","1","PK036","SITI ROSMAYANTI","28-Dec-18","07:56","17:50","","");
INSERT INTO tbl_presensi_karyawan VALUES("804","1","PK036","SITI ROSMAYANTI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("805","1","PK036","SITI ROSMAYANTI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("806","1","PK036","SITI ROSMAYANTI","31-Dec-18","07:48","16:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("807","1","PK037","MAYLISA MARSITA ANGGREIN","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("808","1","PK037","MAYLISA MARSITA ANGGREIN","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("809","1","PK037","MAYLISA MARSITA ANGGREIN","03-Dec-18","14:37","","06:37","");
INSERT INTO tbl_presensi_karyawan VALUES("810","1","PK037","MAYLISA MARSITA ANGGREIN","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("811","1","PK037","MAYLISA MARSITA ANGGREIN","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("812","1","PK037","MAYLISA MARSITA ANGGREIN","06-Dec-18","08:28","18:43","00:28","");
INSERT INTO tbl_presensi_karyawan VALUES("813","1","PK037","MAYLISA MARSITA ANGGREIN","07-Dec-18","08:55","18:19","00:55","");
INSERT INTO tbl_presensi_karyawan VALUES("814","1","PK037","MAYLISA MARSITA ANGGREIN","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("815","1","PK037","MAYLISA MARSITA ANGGREIN","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("816","1","PK037","MAYLISA MARSITA ANGGREIN","10-Dec-18","","17:27","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("817","1","PK037","MAYLISA MARSITA ANGGREIN","11-Dec-18","08:44","17:15","00:44","");
INSERT INTO tbl_presensi_karyawan VALUES("818","1","PK037","MAYLISA MARSITA ANGGREIN","12-Dec-18","08:59","18:50","00:59","");
INSERT INTO tbl_presensi_karyawan VALUES("819","1","PK037","MAYLISA MARSITA ANGGREIN","13-Dec-18","08:48","20:14","00:48","");
INSERT INTO tbl_presensi_karyawan VALUES("820","1","PK037","MAYLISA MARSITA ANGGREIN","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("821","1","PK037","MAYLISA MARSITA ANGGREIN","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("822","1","PK037","MAYLISA MARSITA ANGGREIN","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("823","1","PK037","MAYLISA MARSITA ANGGREIN","17-Dec-18","","17:31","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("824","1","PK037","MAYLISA MARSITA ANGGREIN","18-Dec-18","09:19","18:21","01:19","");
INSERT INTO tbl_presensi_karyawan VALUES("825","1","PK037","MAYLISA MARSITA ANGGREIN","19-Dec-18","08:40","17:20","00:40","");
INSERT INTO tbl_presensi_karyawan VALUES("826","1","PK037","MAYLISA MARSITA ANGGREIN","20-Dec-18","09:01","17:58","01:01","");
INSERT INTO tbl_presensi_karyawan VALUES("827","1","PK037","MAYLISA MARSITA ANGGREIN","21-Dec-18","09:09","17:08","01:09","");
INSERT INTO tbl_presensi_karyawan VALUES("828","1","PK037","MAYLISA MARSITA ANGGREIN","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("829","1","PK037","MAYLISA MARSITA ANGGREIN","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("830","1","PK037","MAYLISA MARSITA ANGGREIN","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("831","1","PK037","MAYLISA MARSITA ANGGREIN","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("832","1","PK037","MAYLISA MARSITA ANGGREIN","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("833","1","PK037","MAYLISA MARSITA ANGGREIN","27-Dec-18","08:39","17:15","00:39","");
INSERT INTO tbl_presensi_karyawan VALUES("834","1","PK037","MAYLISA MARSITA ANGGREIN","28-Dec-18","08:44","17:23","00:44","");
INSERT INTO tbl_presensi_karyawan VALUES("835","1","PK037","MAYLISA MARSITA ANGGREIN","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("836","1","PK037","MAYLISA MARSITA ANGGREIN","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("837","1","PK037","MAYLISA MARSITA ANGGREIN","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("838","1","PK048","DIAN IKA NINGRUM","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("839","1","PK048","DIAN IKA NINGRUM","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("840","1","PK048","DIAN IKA NINGRUM","03-Dec-18","09:42","17:16","01:42","");
INSERT INTO tbl_presensi_karyawan VALUES("841","1","PK048","DIAN IKA NINGRUM","04-Dec-18","08:16","","00:16","");
INSERT INTO tbl_presensi_karyawan VALUES("842","1","PK048","DIAN IKA NINGRUM","05-Dec-18","08:25","17:57","00:25","");
INSERT INTO tbl_presensi_karyawan VALUES("843","1","PK048","DIAN IKA NINGRUM","06-Dec-18","08:19","17:57","00:19","");
INSERT INTO tbl_presensi_karyawan VALUES("844","1","PK048","DIAN IKA NINGRUM","07-Dec-18","08:24","18:24","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("845","1","PK048","DIAN IKA NINGRUM","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("846","1","PK048","DIAN IKA NINGRUM","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("847","1","PK048","DIAN IKA NINGRUM","10-Dec-18","08:28","17:54","00:28","");
INSERT INTO tbl_presensi_karyawan VALUES("848","1","PK048","DIAN IKA NINGRUM","11-Dec-18","08:10","17:24","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("849","1","PK048","DIAN IKA NINGRUM","12-Dec-18","08:10","","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("850","1","PK048","DIAN IKA NINGRUM","13-Dec-18","08:17","18:33","00:17","");
INSERT INTO tbl_presensi_karyawan VALUES("851","1","PK048","DIAN IKA NINGRUM","14-Dec-18","08:16","","00:16","");
INSERT INTO tbl_presensi_karyawan VALUES("852","1","PK048","DIAN IKA NINGRUM","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("853","1","PK048","DIAN IKA NINGRUM","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("854","1","PK048","DIAN IKA NINGRUM","17-Dec-18","08:02","17:22","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("855","1","PK048","DIAN IKA NINGRUM","18-Dec-18","08:21","","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("856","1","PK048","DIAN IKA NINGRUM","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("857","1","PK048","DIAN IKA NINGRUM","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("858","1","PK048","DIAN IKA NINGRUM","21-Dec-18","09:54","17:07","01:54","");
INSERT INTO tbl_presensi_karyawan VALUES("859","1","PK048","DIAN IKA NINGRUM","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("860","1","PK048","DIAN IKA NINGRUM","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("861","1","PK048","DIAN IKA NINGRUM","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("862","1","PK048","DIAN IKA NINGRUM","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("863","1","PK048","DIAN IKA NINGRUM","26-Dec-18","11:24","18:09","03:24","");
INSERT INTO tbl_presensi_karyawan VALUES("864","1","PK048","DIAN IKA NINGRUM","27-Dec-18","08:17","22:31","00:17","");
INSERT INTO tbl_presensi_karyawan VALUES("865","1","PK048","DIAN IKA NINGRUM","28-Dec-18","08:10","18:33","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("866","1","PK048","DIAN IKA NINGRUM","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("867","1","PK048","DIAN IKA NINGRUM","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("868","1","PK048","DIAN IKA NINGRUM","31-Dec-18","08:07","15:49","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("869","1","PK050","ADYA KEMARA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("870","1","PK050","ADYA KEMARA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("871","1","PK050","ADYA KEMARA","03-Dec-18","07:51","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("872","1","PK050","ADYA KEMARA","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("873","1","PK050","ADYA KEMARA","05-Dec-18","08:07","17:38","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("874","1","PK050","ADYA KEMARA","06-Dec-18","06:30","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("875","1","PK050","ADYA KEMARA","07-Dec-18","08:06","17:00","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("876","1","PK050","ADYA KEMARA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("877","1","PK050","ADYA KEMARA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("878","1","PK050","ADYA KEMARA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("879","1","PK050","ADYA KEMARA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("880","1","PK050","ADYA KEMARA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("881","1","PK050","ADYA KEMARA","13-Dec-18","07:51","17:47","","");
INSERT INTO tbl_presensi_karyawan VALUES("882","1","PK050","ADYA KEMARA","14-Dec-18","08:00","18:14","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("883","1","PK050","ADYA KEMARA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("884","1","PK050","ADYA KEMARA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("885","1","PK050","ADYA KEMARA","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("886","1","PK050","ADYA KEMARA","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("887","1","PK050","ADYA KEMARA","19-Dec-18","08:00","17:34","","");
INSERT INTO tbl_presensi_karyawan VALUES("888","1","PK050","ADYA KEMARA","20-Dec-18","07:25","17:56","","");
INSERT INTO tbl_presensi_karyawan VALUES("889","1","PK050","ADYA KEMARA","21-Dec-18","07:47","17:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("890","1","PK050","ADYA KEMARA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("891","1","PK050","ADYA KEMARA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("892","1","PK050","ADYA KEMARA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("893","1","PK050","ADYA KEMARA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("894","1","PK050","ADYA KEMARA","26-Dec-18","07:55","18:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("895","1","PK050","ADYA KEMARA","27-Dec-18","07:55","18:31","","");
INSERT INTO tbl_presensi_karyawan VALUES("896","1","PK050","ADYA KEMARA","28-Dec-18","07:56","18:40","","");
INSERT INTO tbl_presensi_karyawan VALUES("897","1","PK050","ADYA KEMARA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("898","1","PK050","ADYA KEMARA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("899","1","PK050","ADYA KEMARA","31-Dec-18","07:48","17:21","","");
INSERT INTO tbl_presensi_karyawan VALUES("900","1","PK052","ARDO YUDHA BARNESA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("901","1","PK052","ARDO YUDHA BARNESA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("902","1","PK052","ARDO YUDHA BARNESA","03-Dec-18","08:09","17:03","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("903","1","PK052","ARDO YUDHA BARNESA","04-Dec-18","08:12","18:16","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("904","1","PK052","ARDO YUDHA BARNESA","05-Dec-18","08:09","19:14","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("905","1","PK052","ARDO YUDHA BARNESA","06-Dec-18","08:12","18:14","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("906","1","PK052","ARDO YUDHA BARNESA","07-Dec-18","","17:18","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("907","1","PK052","ARDO YUDHA BARNESA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("908","1","PK052","ARDO YUDHA BARNESA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("909","1","PK052","ARDO YUDHA BARNESA","10-Dec-18","","17:15","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("910","1","PK052","ARDO YUDHA BARNESA","11-Dec-18","08:03","17:08","00:03","");
INSERT INTO tbl_presensi_karyawan VALUES("911","1","PK052","ARDO YUDHA BARNESA","12-Dec-18","","17:11","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("912","1","PK052","ARDO YUDHA BARNESA","13-Dec-18","08:18","18:10","00:18","");
INSERT INTO tbl_presensi_karyawan VALUES("913","1","PK052","ARDO YUDHA BARNESA","14-Dec-18","08:15","17:24","00:15","");
INSERT INTO tbl_presensi_karyawan VALUES("914","1","PK052","ARDO YUDHA BARNESA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("915","1","PK052","ARDO YUDHA BARNESA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("916","1","PK052","ARDO YUDHA BARNESA","17-Dec-18","","18:20","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("917","1","PK052","ARDO YUDHA BARNESA","18-Dec-18","08:05","17:12","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("918","1","PK052","ARDO YUDHA BARNESA","19-Dec-18","08:17","18:15","00:17","");
INSERT INTO tbl_presensi_karyawan VALUES("919","1","PK052","ARDO YUDHA BARNESA","20-Dec-18","08:07","17:13","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("920","1","PK052","ARDO YUDHA BARNESA","21-Dec-18","","17:06","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("921","1","PK052","ARDO YUDHA BARNESA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("922","1","PK052","ARDO YUDHA BARNESA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("923","1","PK052","ARDO YUDHA BARNESA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("924","1","PK052","ARDO YUDHA BARNESA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("925","1","PK052","ARDO YUDHA BARNESA","26-Dec-18","","18:24","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("926","1","PK052","ARDO YUDHA BARNESA","27-Dec-18","08:09","17:10","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("927","1","PK052","ARDO YUDHA BARNESA","28-Dec-18","07:52","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("928","1","PK052","ARDO YUDHA BARNESA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("929","1","PK052","ARDO YUDHA BARNESA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("930","1","PK052","ARDO YUDHA BARNESA","31-Dec-18","07:52","16:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("931","1","PK053","MELLY FEBRIYANTI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("932","1","PK053","MELLY FEBRIYANTI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("933","1","PK053","MELLY FEBRIYANTI","03-Dec-18","07:20","17:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("934","1","PK053","MELLY FEBRIYANTI","04-Dec-18","07:15","18:17","","");
INSERT INTO tbl_presensi_karyawan VALUES("935","1","PK053","MELLY FEBRIYANTI","05-Dec-18","07:21","17:19","","");
INSERT INTO tbl_presensi_karyawan VALUES("936","1","PK053","MELLY FEBRIYANTI","06-Dec-18","07:23","17:31","","");
INSERT INTO tbl_presensi_karyawan VALUES("937","1","PK053","MELLY FEBRIYANTI","07-Dec-18","07:24","17:35","","");
INSERT INTO tbl_presensi_karyawan VALUES("938","1","PK053","MELLY FEBRIYANTI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("939","1","PK053","MELLY FEBRIYANTI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("940","1","PK053","MELLY FEBRIYANTI","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("941","1","PK053","MELLY FEBRIYANTI","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("942","1","PK053","MELLY FEBRIYANTI","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("943","1","PK053","MELLY FEBRIYANTI","13-Dec-18","07:22","17:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("944","1","PK053","MELLY FEBRIYANTI","14-Dec-18","13:24","17:35","05:24","");
INSERT INTO tbl_presensi_karyawan VALUES("945","1","PK053","MELLY FEBRIYANTI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("946","1","PK053","MELLY FEBRIYANTI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("947","1","PK053","MELLY FEBRIYANTI","17-Dec-18","","17:21","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("948","1","PK053","MELLY FEBRIYANTI","18-Dec-18","07:34","17:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("949","1","PK053","MELLY FEBRIYANTI","19-Dec-18","07:27","17:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("950","1","PK053","MELLY FEBRIYANTI","20-Dec-18","07:29","18:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("951","1","PK053","MELLY FEBRIYANTI","21-Dec-18","07:41","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("952","1","PK053","MELLY FEBRIYANTI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("953","1","PK053","MELLY FEBRIYANTI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("954","1","PK053","MELLY FEBRIYANTI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("955","1","PK053","MELLY FEBRIYANTI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("956","1","PK053","MELLY FEBRIYANTI","26-Dec-18","07:22","17:42","","");
INSERT INTO tbl_presensi_karyawan VALUES("957","1","PK053","MELLY FEBRIYANTI","27-Dec-18","07:28","17:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("958","1","PK053","MELLY FEBRIYANTI","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("959","1","PK053","MELLY FEBRIYANTI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("960","1","PK053","MELLY FEBRIYANTI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("961","1","PK053","MELLY FEBRIYANTI","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("962","1","PK059","BIMO FIRIZKI DIADI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("963","1","PK059","BIMO FIRIZKI DIADI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("964","1","PK059","BIMO FIRIZKI DIADI","03-Dec-18","08:02","17:40","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("965","1","PK059","BIMO FIRIZKI DIADI","04-Dec-18","","17:32","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("966","1","PK059","BIMO FIRIZKI DIADI","05-Dec-18","","17:21","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("967","1","PK059","BIMO FIRIZKI DIADI","06-Dec-18","08:13","17:04","00:13","");
INSERT INTO tbl_presensi_karyawan VALUES("968","1","PK059","BIMO FIRIZKI DIADI","07-Dec-18","07:53","17:41","","");
INSERT INTO tbl_presensi_karyawan VALUES("969","1","PK059","BIMO FIRIZKI DIADI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("970","1","PK059","BIMO FIRIZKI DIADI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("971","1","PK059","BIMO FIRIZKI DIADI","10-Dec-18","13:50","17:54","05:50","");
INSERT INTO tbl_presensi_karyawan VALUES("972","1","PK059","BIMO FIRIZKI DIADI","11-Dec-18","07:59","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("973","1","PK059","BIMO FIRIZKI DIADI","12-Dec-18","08:07","17:30","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("974","1","PK059","BIMO FIRIZKI DIADI","13-Dec-18","08:26","18:05","00:26","");
INSERT INTO tbl_presensi_karyawan VALUES("975","1","PK059","BIMO FIRIZKI DIADI","14-Dec-18","08:16","17:24","00:16","");
INSERT INTO tbl_presensi_karyawan VALUES("976","1","PK059","BIMO FIRIZKI DIADI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("977","1","PK059","BIMO FIRIZKI DIADI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("978","1","PK059","BIMO FIRIZKI DIADI","17-Dec-18","07:43","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("979","1","PK059","BIMO FIRIZKI DIADI","18-Dec-18","07:46","17:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("980","1","PK059","BIMO FIRIZKI DIADI","19-Dec-18","07:52","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("981","1","PK059","BIMO FIRIZKI DIADI","20-Dec-18","07:51","17:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("982","1","PK059","BIMO FIRIZKI DIADI","21-Dec-18","07:58","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("983","1","PK059","BIMO FIRIZKI DIADI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("984","1","PK059","BIMO FIRIZKI DIADI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("985","1","PK059","BIMO FIRIZKI DIADI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("986","1","PK059","BIMO FIRIZKI DIADI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("987","1","PK059","BIMO FIRIZKI DIADI","26-Dec-18","08:16","17:11","00:16","");
INSERT INTO tbl_presensi_karyawan VALUES("988","1","PK059","BIMO FIRIZKI DIADI","27-Dec-18","08:00","17:03","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("989","1","PK059","BIMO FIRIZKI DIADI","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("990","1","PK059","BIMO FIRIZKI DIADI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("991","1","PK059","BIMO FIRIZKI DIADI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("992","1","PK059","BIMO FIRIZKI DIADI","31-Dec-18","08:02","","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("993","1","PK060","DENDITO PRATAMA KARMANDI","01-Dec-18","","21:15","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("994","1","PK060","DENDITO PRATAMA KARMANDI","02-Dec-18","07:28","","","");
INSERT INTO tbl_presensi_karyawan VALUES("995","1","PK060","DENDITO PRATAMA KARMANDI","03-Dec-18","08:12","16:38","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("996","1","PK060","DENDITO PRATAMA KARMANDI","04-Dec-18","08:24","22:20","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("997","1","PK060","DENDITO PRATAMA KARMANDI","05-Dec-18","08:19","21:28","00:19","");
INSERT INTO tbl_presensi_karyawan VALUES("998","1","PK060","DENDITO PRATAMA KARMANDI","06-Dec-18","08:13","20:46","00:13","");
INSERT INTO tbl_presensi_karyawan VALUES("999","1","PK060","DENDITO PRATAMA KARMANDI","07-Dec-18","08:21","19:33","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("1000","1","PK060","DENDITO PRATAMA KARMANDI","08-Dec-18","11:57","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1001","1","PK060","DENDITO PRATAMA KARMANDI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1002","1","PK060","DENDITO PRATAMA KARMANDI","10-Dec-18","08:31","18:40","00:31","");
INSERT INTO tbl_presensi_karyawan VALUES("1003","1","PK060","DENDITO PRATAMA KARMANDI","11-Dec-18","08:00","16:26","","");
INSERT INTO tbl_presensi_karyawan VALUES("1004","1","PK060","DENDITO PRATAMA KARMANDI","12-Dec-18","08:08","","00:08","");
INSERT INTO tbl_presensi_karyawan VALUES("1005","1","PK060","DENDITO PRATAMA KARMANDI","13-Dec-18","08:23","22:16","00:23","");
INSERT INTO tbl_presensi_karyawan VALUES("1006","1","PK060","DENDITO PRATAMA KARMANDI","14-Dec-18","","20:27","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1007","1","PK060","DENDITO PRATAMA KARMANDI","15-Dec-18","09:16","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1008","1","PK060","DENDITO PRATAMA KARMANDI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1009","1","PK060","DENDITO PRATAMA KARMANDI","17-Dec-18","08:01","22:52","00:01","");
INSERT INTO tbl_presensi_karyawan VALUES("1010","1","PK060","DENDITO PRATAMA KARMANDI","18-Dec-18","08:31","22:33","00:31","");
INSERT INTO tbl_presensi_karyawan VALUES("1011","1","PK060","DENDITO PRATAMA KARMANDI","19-Dec-18","08:50","22:47","00:50","");
INSERT INTO tbl_presensi_karyawan VALUES("1012","1","PK060","DENDITO PRATAMA KARMANDI","20-Dec-18","08:41","20:47","00:41","");
INSERT INTO tbl_presensi_karyawan VALUES("1013","1","PK060","DENDITO PRATAMA KARMANDI","21-Dec-18","09:00","15:51","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1014","1","PK060","DENDITO PRATAMA KARMANDI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1015","1","PK060","DENDITO PRATAMA KARMANDI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1016","1","PK060","DENDITO PRATAMA KARMANDI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1017","1","PK060","DENDITO PRATAMA KARMANDI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1018","1","PK060","DENDITO PRATAMA KARMANDI","26-Dec-18","07:52","19:52","","");
INSERT INTO tbl_presensi_karyawan VALUES("1019","1","PK060","DENDITO PRATAMA KARMANDI","27-Dec-18","07:55","20:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("1020","1","PK060","DENDITO PRATAMA KARMANDI","28-Dec-18","08:09","16:20","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("1021","1","PK060","DENDITO PRATAMA KARMANDI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1022","1","PK060","DENDITO PRATAMA KARMANDI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1023","1","PK060","DENDITO PRATAMA KARMANDI","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1024","1","PK062","NUR ASTY PRATIWI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1025","1","PK062","NUR ASTY PRATIWI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1026","1","PK062","NUR ASTY PRATIWI","03-Dec-18","","19:56","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1027","1","PK062","NUR ASTY PRATIWI","04-Dec-18","10:32","20:20","02:32","");
INSERT INTO tbl_presensi_karyawan VALUES("1028","1","PK062","NUR ASTY PRATIWI","05-Dec-18","08:02","18:20","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("1029","1","PK062","NUR ASTY PRATIWI","06-Dec-18","07:58","17:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("1030","1","PK062","NUR ASTY PRATIWI","07-Dec-18","07:53","18:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("1031","1","PK062","NUR ASTY PRATIWI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1032","1","PK062","NUR ASTY PRATIWI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1033","1","PK062","NUR ASTY PRATIWI","10-Dec-18","11:20","17:36","03:20","");
INSERT INTO tbl_presensi_karyawan VALUES("1034","1","PK062","NUR ASTY PRATIWI","11-Dec-18","07:39","17:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("1035","1","PK062","NUR ASTY PRATIWI","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1036","1","PK062","NUR ASTY PRATIWI","13-Dec-18","08:01","19:00","00:01","");
INSERT INTO tbl_presensi_karyawan VALUES("1037","1","PK062","NUR ASTY PRATIWI","14-Dec-18","14:46","17:25","06:46","");
INSERT INTO tbl_presensi_karyawan VALUES("1038","1","PK062","NUR ASTY PRATIWI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1039","1","PK062","NUR ASTY PRATIWI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1040","1","PK062","NUR ASTY PRATIWI","17-Dec-18","08:09","19:07","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("1041","1","PK062","NUR ASTY PRATIWI","18-Dec-18","08:04","19:44","00:04","");
INSERT INTO tbl_presensi_karyawan VALUES("1042","1","PK062","NUR ASTY PRATIWI","19-Dec-18","07:57","18:25","","");
INSERT INTO tbl_presensi_karyawan VALUES("1043","1","PK062","NUR ASTY PRATIWI","20-Dec-18","07:47","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1044","1","PK062","NUR ASTY PRATIWI","21-Dec-18","","17:44","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1045","1","PK062","NUR ASTY PRATIWI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1046","1","PK062","NUR ASTY PRATIWI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1047","1","PK062","NUR ASTY PRATIWI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1048","1","PK062","NUR ASTY PRATIWI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1049","1","PK062","NUR ASTY PRATIWI","26-Dec-18","07:52","19:08","","");
INSERT INTO tbl_presensi_karyawan VALUES("1050","1","PK062","NUR ASTY PRATIWI","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1051","1","PK062","NUR ASTY PRATIWI","28-Dec-18","08:07","17:58","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("1052","1","PK062","NUR ASTY PRATIWI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1053","1","PK062","NUR ASTY PRATIWI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1054","1","PK062","NUR ASTY PRATIWI","31-Dec-18","07:42","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1055","1","PK063","SHOLAHUDDIN TRIWIDINATA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1056","1","PK063","SHOLAHUDDIN TRIWIDINATA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1057","1","PK063","SHOLAHUDDIN TRIWIDINATA","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1058","1","PK063","SHOLAHUDDIN TRIWIDINATA","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1059","1","PK063","SHOLAHUDDIN TRIWIDINATA","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1060","1","PK063","SHOLAHUDDIN TRIWIDINATA","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1061","1","PK063","SHOLAHUDDIN TRIWIDINATA","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1062","1","PK063","SHOLAHUDDIN TRIWIDINATA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1063","1","PK063","SHOLAHUDDIN TRIWIDINATA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1064","1","PK063","SHOLAHUDDIN TRIWIDINATA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1065","1","PK063","SHOLAHUDDIN TRIWIDINATA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1066","1","PK063","SHOLAHUDDIN TRIWIDINATA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1067","1","PK063","SHOLAHUDDIN TRIWIDINATA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1068","1","PK063","SHOLAHUDDIN TRIWIDINATA","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1069","1","PK063","SHOLAHUDDIN TRIWIDINATA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1070","1","PK063","SHOLAHUDDIN TRIWIDINATA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1071","1","PK063","SHOLAHUDDIN TRIWIDINATA","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1072","1","PK063","SHOLAHUDDIN TRIWIDINATA","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1073","1","PK063","SHOLAHUDDIN TRIWIDINATA","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1074","1","PK063","SHOLAHUDDIN TRIWIDINATA","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1075","1","PK063","SHOLAHUDDIN TRIWIDINATA","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1076","1","PK063","SHOLAHUDDIN TRIWIDINATA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1077","1","PK063","SHOLAHUDDIN TRIWIDINATA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1078","1","PK063","SHOLAHUDDIN TRIWIDINATA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1079","1","PK063","SHOLAHUDDIN TRIWIDINATA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1080","1","PK063","SHOLAHUDDIN TRIWIDINATA","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1081","1","PK063","SHOLAHUDDIN TRIWIDINATA","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1082","1","PK063","SHOLAHUDDIN TRIWIDINATA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1083","1","PK063","SHOLAHUDDIN TRIWIDINATA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1084","1","PK063","SHOLAHUDDIN TRIWIDINATA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1085","1","PK063","SHOLAHUDDIN TRIWIDINATA","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1086","1","PK064","BUKRY CHAMMA SIBURIAN","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1087","1","PK064","BUKRY CHAMMA SIBURIAN","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1088","1","PK064","BUKRY CHAMMA SIBURIAN","03-Dec-18","07:09","19:55","","");
INSERT INTO tbl_presensi_karyawan VALUES("1089","1","PK064","BUKRY CHAMMA SIBURIAN","04-Dec-18","07:12","20:20","","");
INSERT INTO tbl_presensi_karyawan VALUES("1090","1","PK064","BUKRY CHAMMA SIBURIAN","05-Dec-18","07:14","19:16","","");
INSERT INTO tbl_presensi_karyawan VALUES("1091","1","PK064","BUKRY CHAMMA SIBURIAN","06-Dec-18","07:15","18:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("1092","1","PK064","BUKRY CHAMMA SIBURIAN","07-Dec-18","07:15","18:38","","");
INSERT INTO tbl_presensi_karyawan VALUES("1093","1","PK064","BUKRY CHAMMA SIBURIAN","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1094","1","PK064","BUKRY CHAMMA SIBURIAN","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1095","1","PK064","BUKRY CHAMMA SIBURIAN","10-Dec-18","07:28","19:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("1096","1","PK064","BUKRY CHAMMA SIBURIAN","11-Dec-18","07:22","18:15","","");
INSERT INTO tbl_presensi_karyawan VALUES("1097","1","PK064","BUKRY CHAMMA SIBURIAN","12-Dec-18","07:19","19:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("1098","1","PK064","BUKRY CHAMMA SIBURIAN","13-Dec-18","07:18","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1099","1","PK064","BUKRY CHAMMA SIBURIAN","14-Dec-18","","18:14","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1100","1","PK064","BUKRY CHAMMA SIBURIAN","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1101","1","PK064","BUKRY CHAMMA SIBURIAN","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1102","1","PK064","BUKRY CHAMMA SIBURIAN","17-Dec-18","07:26","19:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("1103","1","PK064","BUKRY CHAMMA SIBURIAN","18-Dec-18","07:07","19:39","","");
INSERT INTO tbl_presensi_karyawan VALUES("1104","1","PK064","BUKRY CHAMMA SIBURIAN","19-Dec-18","07:23","18:25","","");
INSERT INTO tbl_presensi_karyawan VALUES("1105","1","PK064","BUKRY CHAMMA SIBURIAN","20-Dec-18","07:14","18:26","","");
INSERT INTO tbl_presensi_karyawan VALUES("1106","1","PK064","BUKRY CHAMMA SIBURIAN","21-Dec-18","07:14","19:47","","");
INSERT INTO tbl_presensi_karyawan VALUES("1107","1","PK064","BUKRY CHAMMA SIBURIAN","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1108","1","PK064","BUKRY CHAMMA SIBURIAN","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1109","1","PK064","BUKRY CHAMMA SIBURIAN","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1110","1","PK064","BUKRY CHAMMA SIBURIAN","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1111","1","PK064","BUKRY CHAMMA SIBURIAN","26-Dec-18","07:09","19:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("1112","1","PK064","BUKRY CHAMMA SIBURIAN","27-Dec-18","07:24","18:39","","");
INSERT INTO tbl_presensi_karyawan VALUES("1113","1","PK064","BUKRY CHAMMA SIBURIAN","28-Dec-18","07:24","18:59","","");
INSERT INTO tbl_presensi_karyawan VALUES("1114","1","PK064","BUKRY CHAMMA SIBURIAN","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1115","1","PK064","BUKRY CHAMMA SIBURIAN","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1116","1","PK064","BUKRY CHAMMA SIBURIAN","31-Dec-18","07:20","16:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("1117","1","PK066","LATIFAH","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1118","1","PK066","LATIFAH","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1119","1","PK066","LATIFAH","03-Dec-18","07:46","17:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("1120","1","PK066","LATIFAH","04-Dec-18","07:48","18:14","","");
INSERT INTO tbl_presensi_karyawan VALUES("1121","1","PK066","LATIFAH","05-Dec-18","07:49","18:20","","");
INSERT INTO tbl_presensi_karyawan VALUES("1122","1","PK066","LATIFAH","06-Dec-18","07:53","17:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("1123","1","PK066","LATIFAH","07-Dec-18","07:41","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1124","1","PK066","LATIFAH","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1125","1","PK066","LATIFAH","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1126","1","PK066","LATIFAH","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1127","1","PK066","LATIFAH","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1128","1","PK066","LATIFAH","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1129","1","PK066","LATIFAH","13-Dec-18","07:49","18:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1130","1","PK066","LATIFAH","14-Dec-18","07:57","17:35","","");
INSERT INTO tbl_presensi_karyawan VALUES("1131","1","PK066","LATIFAH","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1132","1","PK066","LATIFAH","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1133","1","PK066","LATIFAH","17-Dec-18","07:38","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1134","1","PK066","LATIFAH","18-Dec-18","07:49","17:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("1135","1","PK066","LATIFAH","19-Dec-18","07:56","17:12","","");
INSERT INTO tbl_presensi_karyawan VALUES("1136","1","PK066","LATIFAH","20-Dec-18","","17:16","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1137","1","PK066","LATIFAH","21-Dec-18","07:50","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1138","1","PK066","LATIFAH","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1139","1","PK066","LATIFAH","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1140","1","PK066","LATIFAH","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1141","1","PK066","LATIFAH","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1142","1","PK066","LATIFAH","26-Dec-18","08:05","18:24","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("1143","1","PK066","LATIFAH","27-Dec-18","07:47","17:47","","");
INSERT INTO tbl_presensi_karyawan VALUES("1144","1","PK066","LATIFAH","28-Dec-18","07:42","17:15","","");
INSERT INTO tbl_presensi_karyawan VALUES("1145","1","PK066","LATIFAH","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1146","1","PK066","LATIFAH","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1147","1","PK066","LATIFAH","31-Dec-18","07:46","17:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("1148","1","PK068","APRILIA HERMANSYAH","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1149","1","PK068","APRILIA HERMANSYAH","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1150","1","PK068","APRILIA HERMANSYAH","03-Dec-18","06:51","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1151","1","PK068","APRILIA HERMANSYAH","04-Dec-18","06:47","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1152","1","PK068","APRILIA HERMANSYAH","05-Dec-18","06:56","17:37","","");
INSERT INTO tbl_presensi_karyawan VALUES("1153","1","PK068","APRILIA HERMANSYAH","06-Dec-18","06:51","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1154","1","PK068","APRILIA HERMANSYAH","07-Dec-18","06:47","17:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("1155","1","PK068","APRILIA HERMANSYAH","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1156","1","PK068","APRILIA HERMANSYAH","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1157","1","PK068","APRILIA HERMANSYAH","10-Dec-18","06:52","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("1158","1","PK068","APRILIA HERMANSYAH","11-Dec-18","06:47","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1159","1","PK068","APRILIA HERMANSYAH","12-Dec-18","06:54","17:08","","");
INSERT INTO tbl_presensi_karyawan VALUES("1160","1","PK068","APRILIA HERMANSYAH","13-Dec-18","06:52","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("1161","1","PK068","APRILIA HERMANSYAH","14-Dec-18","06:47","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1162","1","PK068","APRILIA HERMANSYAH","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1163","1","PK068","APRILIA HERMANSYAH","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1164","1","PK068","APRILIA HERMANSYAH","17-Dec-18","06:47","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1165","1","PK068","APRILIA HERMANSYAH","18-Dec-18","09:51","17:09","01:51","");
INSERT INTO tbl_presensi_karyawan VALUES("1166","1","PK068","APRILIA HERMANSYAH","19-Dec-18","07:11","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1167","1","PK068","APRILIA HERMANSYAH","20-Dec-18","06:51","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1168","1","PK068","APRILIA HERMANSYAH","21-Dec-18","06:41","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1169","1","PK068","APRILIA HERMANSYAH","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1170","1","PK068","APRILIA HERMANSYAH","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1171","1","PK068","APRILIA HERMANSYAH","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1172","1","PK068","APRILIA HERMANSYAH","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1173","1","PK068","APRILIA HERMANSYAH","26-Dec-18","09:22","15:30","01:22","");
INSERT INTO tbl_presensi_karyawan VALUES("1174","1","PK068","APRILIA HERMANSYAH","27-Dec-18","08:24","17:00","00:24","");
INSERT INTO tbl_presensi_karyawan VALUES("1175","1","PK068","APRILIA HERMANSYAH","28-Dec-18","06:36","17:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1176","1","PK068","APRILIA HERMANSYAH","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1177","1","PK068","APRILIA HERMANSYAH","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1178","1","PK068","APRILIA HERMANSYAH","31-Dec-18","06:41","15:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("1179","1","PK065","RIZKI PANGARSO","01-Dec-18","13:07","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1180","1","PK065","RIZKI PANGARSO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1181","1","PK065","RIZKI PANGARSO","03-Dec-18","","17:49","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1182","1","PK065","RIZKI PANGARSO","04-Dec-18","","18:16","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1183","1","PK065","RIZKI PANGARSO","05-Dec-18","","18:05","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1184","1","PK065","RIZKI PANGARSO","06-Dec-18","08:06","17:22","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("1185","1","PK065","RIZKI PANGARSO","07-Dec-18","06:47","17:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("1186","1","PK065","RIZKI PANGARSO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1187","1","PK065","RIZKI PANGARSO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1188","1","PK065","RIZKI PANGARSO","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1189","1","PK065","RIZKI PANGARSO","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1190","1","PK065","RIZKI PANGARSO","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1191","1","PK065","RIZKI PANGARSO","13-Dec-18","","18:55","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1192","1","PK065","RIZKI PANGARSO","14-Dec-18","07:05","17:36","","");
INSERT INTO tbl_presensi_karyawan VALUES("1193","1","PK065","RIZKI PANGARSO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1194","1","PK065","RIZKI PANGARSO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1195","1","PK065","RIZKI PANGARSO","17-Dec-18","","17:20","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1196","1","PK065","RIZKI PANGARSO","18-Dec-18","07:07","17:31","","");
INSERT INTO tbl_presensi_karyawan VALUES("1197","1","PK065","RIZKI PANGARSO","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1198","1","PK065","RIZKI PANGARSO","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1199","1","PK065","RIZKI PANGARSO","21-Dec-18","07:05","17:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("1200","1","PK065","RIZKI PANGARSO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1201","1","PK065","RIZKI PANGARSO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1202","1","PK065","RIZKI PANGARSO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1203","1","PK065","RIZKI PANGARSO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1204","1","PK065","RIZKI PANGARSO","26-Dec-18","11:02","18:21","03:02","");
INSERT INTO tbl_presensi_karyawan VALUES("1205","1","PK065","RIZKI PANGARSO","27-Dec-18","","17:28","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1206","1","PK065","RIZKI PANGARSO","28-Dec-18","07:30","18:59","","");
INSERT INTO tbl_presensi_karyawan VALUES("1207","1","PK065","RIZKI PANGARSO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1208","1","PK065","RIZKI PANGARSO","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1209","1","PK065","RIZKI PANGARSO","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1210","1","PK072","MOHAMAD REZA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1211","1","PK072","MOHAMAD REZA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1212","1","PK072","MOHAMAD REZA","03-Dec-18","07:49","16:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1213","1","PK072","MOHAMAD REZA","04-Dec-18","07:54","17:30","","");
INSERT INTO tbl_presensi_karyawan VALUES("1214","1","PK072","MOHAMAD REZA","05-Dec-18","07:53","20:28","","");
INSERT INTO tbl_presensi_karyawan VALUES("1215","1","PK072","MOHAMAD REZA","06-Dec-18","07:37","17:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("1216","1","PK072","MOHAMAD REZA","07-Dec-18","06:45","17:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("1217","1","PK072","MOHAMAD REZA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1218","1","PK072","MOHAMAD REZA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1219","1","PK072","MOHAMAD REZA","10-Dec-18","07:45","18:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1220","1","PK072","MOHAMAD REZA","11-Dec-18","07:42","17:09","","");
INSERT INTO tbl_presensi_karyawan VALUES("1221","1","PK072","MOHAMAD REZA","12-Dec-18","08:09","","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("1222","1","PK072","MOHAMAD REZA","13-Dec-18","07:43","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1223","1","PK072","MOHAMAD REZA","14-Dec-18","10:32","17:36","02:32","");
INSERT INTO tbl_presensi_karyawan VALUES("1224","1","PK072","MOHAMAD REZA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1225","1","PK072","MOHAMAD REZA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1226","1","PK072","MOHAMAD REZA","17-Dec-18","07:42","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1227","1","PK072","MOHAMAD REZA","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1228","1","PK072","MOHAMAD REZA","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1229","1","PK072","MOHAMAD REZA","20-Dec-18","07:42","17:14","","");
INSERT INTO tbl_presensi_karyawan VALUES("1230","1","PK072","MOHAMAD REZA","21-Dec-18","10:17","19:29","02:17","");
INSERT INTO tbl_presensi_karyawan VALUES("1231","1","PK072","MOHAMAD REZA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1232","1","PK072","MOHAMAD REZA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1233","1","PK072","MOHAMAD REZA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1234","1","PK072","MOHAMAD REZA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1235","1","PK072","MOHAMAD REZA","26-Dec-18","07:49","22:42","","");
INSERT INTO tbl_presensi_karyawan VALUES("1236","1","PK072","MOHAMAD REZA","27-Dec-18","07:53","22:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("1237","1","PK072","MOHAMAD REZA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1238","1","PK072","MOHAMAD REZA","29-Dec-18","10:14","19:16","","");
INSERT INTO tbl_presensi_karyawan VALUES("1239","1","PK072","MOHAMAD REZA","30-Dec-18","10:29","19:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1240","1","PK072","MOHAMAD REZA","31-Dec-18","07:43","17:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("1241","1","10039","ADE GUSTIKA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1242","1","10039","ADE GUSTIKA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1243","1","10039","ADE GUSTIKA","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1244","1","10039","ADE GUSTIKA","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1245","1","10039","ADE GUSTIKA","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1246","1","10039","ADE GUSTIKA","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1247","1","10039","ADE GUSTIKA","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1248","1","10039","ADE GUSTIKA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1249","1","10039","ADE GUSTIKA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1250","1","10039","ADE GUSTIKA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1251","1","10039","ADE GUSTIKA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1252","1","10039","ADE GUSTIKA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1253","1","10039","ADE GUSTIKA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1254","1","10039","ADE GUSTIKA","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1255","1","10039","ADE GUSTIKA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1256","1","10039","ADE GUSTIKA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1257","1","10039","ADE GUSTIKA","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1258","1","10039","ADE GUSTIKA","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1259","1","10039","ADE GUSTIKA","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1260","1","10039","ADE GUSTIKA","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1261","1","10039","ADE GUSTIKA","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1262","1","10039","ADE GUSTIKA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1263","1","10039","ADE GUSTIKA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1264","1","10039","ADE GUSTIKA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1265","1","10039","ADE GUSTIKA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1266","1","10039","ADE GUSTIKA","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1267","1","10039","ADE GUSTIKA","27-Dec-18","08:42","15:15","00:42","");
INSERT INTO tbl_presensi_karyawan VALUES("1268","1","10039","ADE GUSTIKA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1269","1","10039","ADE GUSTIKA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1270","1","10039","ADE GUSTIKA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1271","1","10039","ADE GUSTIKA","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1272","1","10041","KRISTIANA LIVE SONYA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1273","1","10041","KRISTIANA LIVE SONYA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1274","1","10041","KRISTIANA LIVE SONYA","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1275","1","10041","KRISTIANA LIVE SONYA","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1276","1","10041","KRISTIANA LIVE SONYA","05-Dec-18","","17:35","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1277","1","10041","KRISTIANA LIVE SONYA","06-Dec-18","","17:05","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1278","1","10041","KRISTIANA LIVE SONYA","07-Dec-18","09:49","17:02","01:49","");
INSERT INTO tbl_presensi_karyawan VALUES("1279","1","10041","KRISTIANA LIVE SONYA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1280","1","10041","KRISTIANA LIVE SONYA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1281","1","10041","KRISTIANA LIVE SONYA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1282","1","10041","KRISTIANA LIVE SONYA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1283","1","10041","KRISTIANA LIVE SONYA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1284","1","10041","KRISTIANA LIVE SONYA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1285","1","10041","KRISTIANA LIVE SONYA","14-Dec-18","","17:34","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1286","1","10041","KRISTIANA LIVE SONYA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1287","1","10041","KRISTIANA LIVE SONYA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1288","1","10041","KRISTIANA LIVE SONYA","17-Dec-18","09:20","18:12","01:20","");
INSERT INTO tbl_presensi_karyawan VALUES("1289","1","10041","KRISTIANA LIVE SONYA","18-Dec-18","","17:12","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1290","1","10041","KRISTIANA LIVE SONYA","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1291","1","10041","KRISTIANA LIVE SONYA","20-Dec-18","","17:19","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1292","1","10041","KRISTIANA LIVE SONYA","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1293","1","10041","KRISTIANA LIVE SONYA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1294","1","10041","KRISTIANA LIVE SONYA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1295","1","10041","KRISTIANA LIVE SONYA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1296","1","10041","KRISTIANA LIVE SONYA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1297","1","10041","KRISTIANA LIVE SONYA","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1298","1","10041","KRISTIANA LIVE SONYA","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1299","1","10041","KRISTIANA LIVE SONYA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1300","1","10041","KRISTIANA LIVE SONYA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1301","1","10041","KRISTIANA LIVE SONYA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1302","1","10041","KRISTIANA LIVE SONYA","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1303","1","PK084","TANIA INTAN SARI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1304","1","PK084","TANIA INTAN SARI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1305","1","PK084","TANIA INTAN SARI","03-Dec-18","07:43","16:58","","");
INSERT INTO tbl_presensi_karyawan VALUES("1306","1","PK084","TANIA INTAN SARI","04-Dec-18","07:25","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1307","1","PK084","TANIA INTAN SARI","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1308","1","PK084","TANIA INTAN SARI","06-Dec-18","07:27","17:19","","");
INSERT INTO tbl_presensi_karyawan VALUES("1309","1","PK084","TANIA INTAN SARI","07-Dec-18","06:30","18:14","","");
INSERT INTO tbl_presensi_karyawan VALUES("1310","1","PK084","TANIA INTAN SARI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1311","1","PK084","TANIA INTAN SARI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1312","1","PK084","TANIA INTAN SARI","10-Dec-18","07:34","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("1313","1","PK084","TANIA INTAN SARI","11-Dec-18","07:24","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1314","1","PK084","TANIA INTAN SARI","12-Dec-18","07:10","17:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("1315","1","PK084","TANIA INTAN SARI","13-Dec-18","07:23","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1316","1","PK084","TANIA INTAN SARI","14-Dec-18","06:46","17:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("1317","1","PK084","TANIA INTAN SARI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1318","1","PK084","TANIA INTAN SARI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1319","1","PK084","TANIA INTAN SARI","17-Dec-18","07:25","18:43","","");
INSERT INTO tbl_presensi_karyawan VALUES("1320","1","PK084","TANIA INTAN SARI","18-Dec-18","07:41","17:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("1321","1","PK084","TANIA INTAN SARI","19-Dec-18","07:05","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1322","1","PK084","TANIA INTAN SARI","20-Dec-18","07:10","17:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1323","1","PK084","TANIA INTAN SARI","21-Dec-18","06:55","16:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("1324","1","PK084","TANIA INTAN SARI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1325","1","PK084","TANIA INTAN SARI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1326","1","PK084","TANIA INTAN SARI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1327","1","PK084","TANIA INTAN SARI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1328","1","PK084","TANIA INTAN SARI","26-Dec-18","07:15","17:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("1329","1","PK084","TANIA INTAN SARI","27-Dec-18","07:22","17:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("1330","1","PK084","TANIA INTAN SARI","28-Dec-18","06:54","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("1331","1","PK084","TANIA INTAN SARI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1332","1","PK084","TANIA INTAN SARI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1333","1","PK084","TANIA INTAN SARI","31-Dec-18","07:05","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1334","1","PK086","SYAMSUL FADLY","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1335","1","PK086","SYAMSUL FADLY","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1336","1","PK086","SYAMSUL FADLY","03-Dec-18","","19:55","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1337","1","PK086","SYAMSUL FADLY","04-Dec-18","07:35","20:20","","");
INSERT INTO tbl_presensi_karyawan VALUES("1338","1","PK086","SYAMSUL FADLY","05-Dec-18","07:49","19:15","","");
INSERT INTO tbl_presensi_karyawan VALUES("1339","1","PK086","SYAMSUL FADLY","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1340","1","PK086","SYAMSUL FADLY","07-Dec-18","07:30","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1341","1","PK086","SYAMSUL FADLY","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1342","1","PK086","SYAMSUL FADLY","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1343","1","PK086","SYAMSUL FADLY","10-Dec-18","07:52","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("1344","1","PK086","SYAMSUL FADLY","11-Dec-18","07:48","18:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1345","1","PK086","SYAMSUL FADLY","12-Dec-18","07:32","18:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("1346","1","PK086","SYAMSUL FADLY","13-Dec-18","07:47","18:56","","");
INSERT INTO tbl_presensi_karyawan VALUES("1347","1","PK086","SYAMSUL FADLY","14-Dec-18","07:23","18:14","","");
INSERT INTO tbl_presensi_karyawan VALUES("1348","1","PK086","SYAMSUL FADLY","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1349","1","PK086","SYAMSUL FADLY","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1350","1","PK086","SYAMSUL FADLY","17-Dec-18","07:51","19:07","","");
INSERT INTO tbl_presensi_karyawan VALUES("1351","1","PK086","SYAMSUL FADLY","18-Dec-18","07:29","19:39","","");
INSERT INTO tbl_presensi_karyawan VALUES("1352","1","PK086","SYAMSUL FADLY","19-Dec-18","07:38","18:25","","");
INSERT INTO tbl_presensi_karyawan VALUES("1353","1","PK086","SYAMSUL FADLY","20-Dec-18","07:29","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1354","1","PK086","SYAMSUL FADLY","21-Dec-18","07:36","19:47","","");
INSERT INTO tbl_presensi_karyawan VALUES("1355","1","PK086","SYAMSUL FADLY","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1356","1","PK086","SYAMSUL FADLY","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1357","1","PK086","SYAMSUL FADLY","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1358","1","PK086","SYAMSUL FADLY","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1359","1","PK086","SYAMSUL FADLY","26-Dec-18","07:22","19:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1360","1","PK086","SYAMSUL FADLY","27-Dec-18","07:23","18:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("1361","1","PK086","SYAMSUL FADLY","28-Dec-18","07:23","18:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("1362","1","PK086","SYAMSUL FADLY","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1363","1","PK086","SYAMSUL FADLY","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1364","1","PK086","SYAMSUL FADLY","31-Dec-18","07:20","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1365","1","10042","SLAMET PURWANTO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1366","1","10042","SLAMET PURWANTO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1367","1","10042","SLAMET PURWANTO","03-Dec-18","06:53","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1368","1","10042","SLAMET PURWANTO","04-Dec-18","06:08","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1369","1","10042","SLAMET PURWANTO","05-Dec-18","06:53","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1370","1","10042","SLAMET PURWANTO","06-Dec-18","12:52","17:00","04:52","");
INSERT INTO tbl_presensi_karyawan VALUES("1371","1","10042","SLAMET PURWANTO","07-Dec-18","06:26","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1372","1","10042","SLAMET PURWANTO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1373","1","10042","SLAMET PURWANTO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1374","1","10042","SLAMET PURWANTO","10-Dec-18","07:01","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1375","1","10042","SLAMET PURWANTO","11-Dec-18","07:02","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("1376","1","10042","SLAMET PURWANTO","12-Dec-18","06:56","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1377","1","10042","SLAMET PURWANTO","13-Dec-18","06:46","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1378","1","10042","SLAMET PURWANTO","14-Dec-18","06:38","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1379","1","10042","SLAMET PURWANTO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1380","1","10042","SLAMET PURWANTO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1381","1","10042","SLAMET PURWANTO","17-Dec-18","07:40","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1382","1","10042","SLAMET PURWANTO","18-Dec-18","07:01","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("1383","1","10042","SLAMET PURWANTO","19-Dec-18","06:48","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1384","1","10042","SLAMET PURWANTO","20-Dec-18","06:44","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1385","1","10042","SLAMET PURWANTO","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1386","1","10042","SLAMET PURWANTO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1387","1","10042","SLAMET PURWANTO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1388","1","10042","SLAMET PURWANTO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1389","1","10042","SLAMET PURWANTO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1390","1","10042","SLAMET PURWANTO","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1391","1","10042","SLAMET PURWANTO","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1392","1","10042","SLAMET PURWANTO","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1393","1","10042","SLAMET PURWANTO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1394","1","10042","SLAMET PURWANTO","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1395","1","10042","SLAMET PURWANTO","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1396","1","10044","TISA YUANISA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1397","1","10044","TISA YUANISA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1398","1","10044","TISA YUANISA","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1399","1","10044","TISA YUANISA","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1400","1","10044","TISA YUANISA","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1401","1","10044","TISA YUANISA","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1402","1","10044","TISA YUANISA","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1403","1","10044","TISA YUANISA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1404","1","10044","TISA YUANISA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1405","1","10044","TISA YUANISA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1406","1","10044","TISA YUANISA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1407","1","10044","TISA YUANISA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1408","1","10044","TISA YUANISA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1409","1","10044","TISA YUANISA","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1410","1","10044","TISA YUANISA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1411","1","10044","TISA YUANISA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1412","1","10044","TISA YUANISA","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1413","1","10044","TISA YUANISA","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1414","1","10044","TISA YUANISA","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1415","1","10044","TISA YUANISA","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1416","1","10044","TISA YUANISA","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1417","1","10044","TISA YUANISA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1418","1","10044","TISA YUANISA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1419","1","10044","TISA YUANISA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1420","1","10044","TISA YUANISA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1421","1","10044","TISA YUANISA","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1422","1","10044","TISA YUANISA","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1423","1","10044","TISA YUANISA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1424","1","10044","TISA YUANISA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1425","1","10044","TISA YUANISA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1426","1","10044","TISA YUANISA","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1427","1","10043","INDRI KURNIA LESTARI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1428","1","10043","INDRI KURNIA LESTARI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1429","1","10043","INDRI KURNIA LESTARI","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1430","1","10043","INDRI KURNIA LESTARI","04-Dec-18","08:12","18:20","00:12","");
INSERT INTO tbl_presensi_karyawan VALUES("1431","1","10043","INDRI KURNIA LESTARI","05-Dec-18","","18:18","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1432","1","10043","INDRI KURNIA LESTARI","06-Dec-18","08:33","18:05","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("1433","1","10043","INDRI KURNIA LESTARI","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1434","1","10043","INDRI KURNIA LESTARI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1435","1","10043","INDRI KURNIA LESTARI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1436","1","10043","INDRI KURNIA LESTARI","10-Dec-18","08:33","17:23","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("1437","1","10043","INDRI KURNIA LESTARI","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1438","1","10043","INDRI KURNIA LESTARI","12-Dec-18","","18:11","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1439","1","10043","INDRI KURNIA LESTARI","13-Dec-18","08:30","19:57","00:30","");
INSERT INTO tbl_presensi_karyawan VALUES("1440","1","10043","INDRI KURNIA LESTARI","14-Dec-18","08:33","","00:33","");
INSERT INTO tbl_presensi_karyawan VALUES("1441","1","10043","INDRI KURNIA LESTARI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1442","1","10043","INDRI KURNIA LESTARI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1443","1","10043","INDRI KURNIA LESTARI","17-Dec-18","08:36","18:43","00:36","");
INSERT INTO tbl_presensi_karyawan VALUES("1444","1","10043","INDRI KURNIA LESTARI","18-Dec-18","","17:14","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1445","1","10043","INDRI KURNIA LESTARI","19-Dec-18","08:05","17:15","00:05","");
INSERT INTO tbl_presensi_karyawan VALUES("1446","1","10043","INDRI KURNIA LESTARI","20-Dec-18","","17:06","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1447","1","10043","INDRI KURNIA LESTARI","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1448","1","10043","INDRI KURNIA LESTARI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1449","1","10043","INDRI KURNIA LESTARI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1450","1","10043","INDRI KURNIA LESTARI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1451","1","10043","INDRI KURNIA LESTARI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1452","1","10043","INDRI KURNIA LESTARI","26-Dec-18","","17:33","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1453","1","10043","INDRI KURNIA LESTARI","27-Dec-18","","17:18","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1454","1","10043","INDRI KURNIA LESTARI","28-Dec-18","08:57","17:02","00:57","");
INSERT INTO tbl_presensi_karyawan VALUES("1455","1","10043","INDRI KURNIA LESTARI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1456","1","10043","INDRI KURNIA LESTARI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1457","1","10043","INDRI KURNIA LESTARI","31-Dec-18","08:11","","00:11","");
INSERT INTO tbl_presensi_karyawan VALUES("1458","1","PK095","SABILA ADINDA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1459","1","PK095","SABILA ADINDA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1460","1","PK095","SABILA ADINDA","03-Dec-18","07:32","16:34","","");
INSERT INTO tbl_presensi_karyawan VALUES("1461","1","PK095","SABILA ADINDA","04-Dec-18","07:30","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1462","1","PK095","SABILA ADINDA","05-Dec-18","07:34","17:40","","");
INSERT INTO tbl_presensi_karyawan VALUES("1463","1","PK095","SABILA ADINDA","06-Dec-18","07:55","17:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("1464","1","PK095","SABILA ADINDA","07-Dec-18","07:20","17:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("1465","1","PK095","SABILA ADINDA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1466","1","PK095","SABILA ADINDA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1467","1","PK095","SABILA ADINDA","10-Dec-18","07:17","17:23","","");
INSERT INTO tbl_presensi_karyawan VALUES("1468","1","PK095","SABILA ADINDA","11-Dec-18","07:28","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1469","1","PK095","SABILA ADINDA","12-Dec-18","07:22","17:08","","");
INSERT INTO tbl_presensi_karyawan VALUES("1470","1","PK095","SABILA ADINDA","13-Dec-18","07:15","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1471","1","PK095","SABILA ADINDA","14-Dec-18","07:59","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("1472","1","PK095","SABILA ADINDA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1473","1","PK095","SABILA ADINDA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1474","1","PK095","SABILA ADINDA","17-Dec-18","07:33","17:40","","");
INSERT INTO tbl_presensi_karyawan VALUES("1475","1","PK095","SABILA ADINDA","18-Dec-18","07:24","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1476","1","PK095","SABILA ADINDA","19-Dec-18","07:31","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1477","1","PK095","SABILA ADINDA","20-Dec-18","07:27","17:14","","");
INSERT INTO tbl_presensi_karyawan VALUES("1478","1","PK095","SABILA ADINDA","21-Dec-18","07:04","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1479","1","PK095","SABILA ADINDA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1480","1","PK095","SABILA ADINDA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1481","1","PK095","SABILA ADINDA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1482","1","PK095","SABILA ADINDA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1483","1","PK095","SABILA ADINDA","26-Dec-18","07:34","16:25","","");
INSERT INTO tbl_presensi_karyawan VALUES("1484","1","PK095","SABILA ADINDA","27-Dec-18","07:23","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1485","1","PK095","SABILA ADINDA","28-Dec-18","07:27","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1486","1","PK095","SABILA ADINDA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1487","1","PK095","SABILA ADINDA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1488","1","PK095","SABILA ADINDA","31-Dec-18","07:28","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1489","1","PK096","INDAH SUSANTI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1490","1","PK096","INDAH SUSANTI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1491","1","PK096","INDAH SUSANTI","03-Dec-18","","19:15","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1492","1","PK096","INDAH SUSANTI","04-Dec-18","","18:18","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1493","1","PK096","INDAH SUSANTI","05-Dec-18","","18:41","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1494","1","PK096","INDAH SUSANTI","06-Dec-18","07:55","18:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("1495","1","PK096","INDAH SUSANTI","07-Dec-18","08:02","19:10","00:02","");
INSERT INTO tbl_presensi_karyawan VALUES("1496","1","PK096","INDAH SUSANTI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1497","1","PK096","INDAH SUSANTI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1498","1","PK096","INDAH SUSANTI","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1499","1","PK096","INDAH SUSANTI","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1500","1","PK096","INDAH SUSANTI","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1501","1","PK096","INDAH SUSANTI","13-Dec-18","07:52","18:58","","");
INSERT INTO tbl_presensi_karyawan VALUES("1502","1","PK096","INDAH SUSANTI","14-Dec-18","07:08","17:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("1503","1","PK096","INDAH SUSANTI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1504","1","PK096","INDAH SUSANTI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1505","1","PK096","INDAH SUSANTI","17-Dec-18","14:18","17:05","06:18","");
INSERT INTO tbl_presensi_karyawan VALUES("1506","1","PK096","INDAH SUSANTI","18-Dec-18","07:41","17:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("1507","1","PK096","INDAH SUSANTI","19-Dec-18","07:43","17:10","","");
INSERT INTO tbl_presensi_karyawan VALUES("1508","1","PK096","INDAH SUSANTI","20-Dec-18","07:40","17:16","","");
INSERT INTO tbl_presensi_karyawan VALUES("1509","1","PK096","INDAH SUSANTI","21-Dec-18","07:55","17:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1510","1","PK096","INDAH SUSANTI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1511","1","PK096","INDAH SUSANTI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1512","1","PK096","INDAH SUSANTI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1513","1","PK096","INDAH SUSANTI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1514","1","PK096","INDAH SUSANTI","26-Dec-18","","17:42","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1515","1","PK096","INDAH SUSANTI","27-Dec-18","","17:47","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1516","1","PK096","INDAH SUSANTI","28-Dec-18","07:52","17:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("1517","1","PK096","INDAH SUSANTI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1518","1","PK096","INDAH SUSANTI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1519","1","PK096","INDAH SUSANTI","31-Dec-18","07:49","16:56","","");
INSERT INTO tbl_presensi_karyawan VALUES("1520","1","D0008","TITA PAULINA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1521","1","D0008","TITA PAULINA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1522","1","D0008","TITA PAULINA","03-Dec-18","10:11","","02:11","");
INSERT INTO tbl_presensi_karyawan VALUES("1523","1","D0008","TITA PAULINA","04-Dec-18","09:00","","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1524","1","D0008","TITA PAULINA","05-Dec-18","","17:46","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1525","1","D0008","TITA PAULINA","06-Dec-18","08:37","17:17","00:37","");
INSERT INTO tbl_presensi_karyawan VALUES("1526","1","D0008","TITA PAULINA","07-Dec-18","08:58","17:17","00:58","");
INSERT INTO tbl_presensi_karyawan VALUES("1527","1","D0008","TITA PAULINA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1528","1","D0008","TITA PAULINA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1529","1","D0008","TITA PAULINA","10-Dec-18","09:15","17:36","01:15","");
INSERT INTO tbl_presensi_karyawan VALUES("1530","1","D0008","TITA PAULINA","11-Dec-18","08:57","17:10","00:57","");
INSERT INTO tbl_presensi_karyawan VALUES("1531","1","D0008","TITA PAULINA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1532","1","D0008","TITA PAULINA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1533","1","D0008","TITA PAULINA","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1534","1","D0008","TITA PAULINA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1535","1","D0008","TITA PAULINA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1536","1","D0008","TITA PAULINA","17-Dec-18","","17:46","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1537","1","D0008","TITA PAULINA","18-Dec-18","08:55","","00:55","");
INSERT INTO tbl_presensi_karyawan VALUES("1538","1","D0008","TITA PAULINA","19-Dec-18","08:44","","00:44","");
INSERT INTO tbl_presensi_karyawan VALUES("1539","1","D0008","TITA PAULINA","20-Dec-18","08:31","17:20","00:31","");
INSERT INTO tbl_presensi_karyawan VALUES("1540","1","D0008","TITA PAULINA","21-Dec-18","08:52","","00:52","");
INSERT INTO tbl_presensi_karyawan VALUES("1541","1","D0008","TITA PAULINA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1542","1","D0008","TITA PAULINA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1543","1","D0008","TITA PAULINA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1544","1","D0008","TITA PAULINA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1545","1","D0008","TITA PAULINA","26-Dec-18","09:45","17:48","01:45","");
INSERT INTO tbl_presensi_karyawan VALUES("1546","1","D0008","TITA PAULINA","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1547","1","D0008","TITA PAULINA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1548","1","D0008","TITA PAULINA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1549","1","D0008","TITA PAULINA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1550","1","D0008","TITA PAULINA","31-Dec-18","08:22","15:20","00:22","");
INSERT INTO tbl_presensi_karyawan VALUES("1551","1","PK098","ADIA PUJA PRADANA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1552","1","PK098","ADIA PUJA PRADANA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1553","1","PK098","ADIA PUJA PRADANA","03-Dec-18","","17:18","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1554","1","PK098","ADIA PUJA PRADANA","04-Dec-18","07:47","17:24","","");
INSERT INTO tbl_presensi_karyawan VALUES("1555","1","PK098","ADIA PUJA PRADANA","05-Dec-18","07:04","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1556","1","PK098","ADIA PUJA PRADANA","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1557","1","PK098","ADIA PUJA PRADANA","07-Dec-18","07:46","17:18","","");
INSERT INTO tbl_presensi_karyawan VALUES("1558","1","PK098","ADIA PUJA PRADANA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1559","1","PK098","ADIA PUJA PRADANA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1560","1","PK098","ADIA PUJA PRADANA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1561","1","PK098","ADIA PUJA PRADANA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1562","1","PK098","ADIA PUJA PRADANA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1563","1","PK098","ADIA PUJA PRADANA","13-Dec-18","06:55","17:40","","");
INSERT INTO tbl_presensi_karyawan VALUES("1564","1","PK098","ADIA PUJA PRADANA","14-Dec-18","06:43","17:39","","");
INSERT INTO tbl_presensi_karyawan VALUES("1565","1","PK098","ADIA PUJA PRADANA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1566","1","PK098","ADIA PUJA PRADANA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1567","1","PK098","ADIA PUJA PRADANA","17-Dec-18","08:14","17:20","00:14","");
INSERT INTO tbl_presensi_karyawan VALUES("1568","1","PK098","ADIA PUJA PRADANA","18-Dec-18","06:42","17:31","","");
INSERT INTO tbl_presensi_karyawan VALUES("1569","1","PK098","ADIA PUJA PRADANA","19-Dec-18","07:02","17:37","","");
INSERT INTO tbl_presensi_karyawan VALUES("1570","1","PK098","ADIA PUJA PRADANA","20-Dec-18","06:54","17:13","","");
INSERT INTO tbl_presensi_karyawan VALUES("1571","1","PK098","ADIA PUJA PRADANA","21-Dec-18","06:50","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1572","1","PK098","ADIA PUJA PRADANA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1573","1","PK098","ADIA PUJA PRADANA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1574","1","PK098","ADIA PUJA PRADANA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1575","1","PK098","ADIA PUJA PRADANA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1576","1","PK098","ADIA PUJA PRADANA","26-Dec-18","06:48","17:44","","");
INSERT INTO tbl_presensi_karyawan VALUES("1577","1","PK098","ADIA PUJA PRADANA","27-Dec-18","06:30","17:28","","");
INSERT INTO tbl_presensi_karyawan VALUES("1578","1","PK098","ADIA PUJA PRADANA","28-Dec-18","06:38","17:48","","");
INSERT INTO tbl_presensi_karyawan VALUES("1579","1","PK098","ADIA PUJA PRADANA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1580","1","PK098","ADIA PUJA PRADANA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1581","1","PK098","ADIA PUJA PRADANA","31-Dec-18","06:27","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1582","1","10047","YATI MELASARI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1583","1","10047","YATI MELASARI","02-Dec-18","10:55","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1584","1","10047","YATI MELASARI","03-Dec-18","07:53","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1585","1","10047","YATI MELASARI","04-Dec-18","07:53","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1586","1","10047","YATI MELASARI","05-Dec-18","07:45","17:11","","");
INSERT INTO tbl_presensi_karyawan VALUES("1587","1","10047","YATI MELASARI","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1588","1","10047","YATI MELASARI","07-Dec-18","07:39","16:33","","");
INSERT INTO tbl_presensi_karyawan VALUES("1589","1","10047","YATI MELASARI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1590","1","10047","YATI MELASARI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1591","1","10047","YATI MELASARI","10-Dec-18","07:57","17:12","","");
INSERT INTO tbl_presensi_karyawan VALUES("1592","1","10047","YATI MELASARI","11-Dec-18","07:33","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1593","1","10047","YATI MELASARI","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1594","1","10047","YATI MELASARI","13-Dec-18","07:40","17:08","","");
INSERT INTO tbl_presensi_karyawan VALUES("1595","1","10047","YATI MELASARI","14-Dec-18","07:42","16:32","","");
INSERT INTO tbl_presensi_karyawan VALUES("1596","1","10047","YATI MELASARI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1597","1","10047","YATI MELASARI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1598","1","10047","YATI MELASARI","17-Dec-18","08:00","17:06","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1599","1","10047","YATI MELASARI","18-Dec-18","07:39","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1600","1","10047","YATI MELASARI","19-Dec-18","07:29","17:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1601","1","10047","YATI MELASARI","20-Dec-18","07:26","17:03","","");
INSERT INTO tbl_presensi_karyawan VALUES("1602","1","10047","YATI MELASARI","21-Dec-18","07:25","15:51","","");
INSERT INTO tbl_presensi_karyawan VALUES("1603","1","10047","YATI MELASARI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1604","1","10047","YATI MELASARI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1605","1","10047","YATI MELASARI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1606","1","10047","YATI MELASARI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1607","1","10047","YATI MELASARI","26-Dec-18","07:47","16:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("1608","1","10047","YATI MELASARI","27-Dec-18","07:58","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1609","1","10047","YATI MELASARI","28-Dec-18","07:26","15:41","","");
INSERT INTO tbl_presensi_karyawan VALUES("1610","1","10047","YATI MELASARI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1611","1","10047","YATI MELASARI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1612","1","10047","YATI MELASARI","31-Dec-18","07:16","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1613","1","PK105","SALMA JOUNARASTI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1614","1","PK105","SALMA JOUNARASTI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1615","1","PK105","SALMA JOUNARASTI","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1616","1","PK105","SALMA JOUNARASTI","04-Dec-18","","19:37","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1617","1","PK105","SALMA JOUNARASTI","05-Dec-18","","18:20","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1618","1","PK105","SALMA JOUNARASTI","06-Dec-18","","18:05","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1619","1","PK105","SALMA JOUNARASTI","07-Dec-18","10:49","17:48","02:49","");
INSERT INTO tbl_presensi_karyawan VALUES("1620","1","PK105","SALMA JOUNARASTI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1621","1","PK105","SALMA JOUNARASTI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1622","1","PK105","SALMA JOUNARASTI","10-Dec-18","08:08","17:36","00:08","");
INSERT INTO tbl_presensi_karyawan VALUES("1623","1","PK105","SALMA JOUNARASTI","11-Dec-18","08:10","18:26","00:10","");
INSERT INTO tbl_presensi_karyawan VALUES("1624","1","PK105","SALMA JOUNARASTI","12-Dec-18","","18:11","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1625","1","PK105","SALMA JOUNARASTI","13-Dec-18","08:44","19:00","00:44","");
INSERT INTO tbl_presensi_karyawan VALUES("1626","1","PK105","SALMA JOUNARASTI","14-Dec-18","08:09","17:24","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("1627","1","PK105","SALMA JOUNARASTI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1628","1","PK105","SALMA JOUNARASTI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1629","1","PK105","SALMA JOUNARASTI","17-Dec-18","08:06","17:14","00:06","");
INSERT INTO tbl_presensi_karyawan VALUES("1630","1","PK105","SALMA JOUNARASTI","18-Dec-18","08:09","17:15","00:09","");
INSERT INTO tbl_presensi_karyawan VALUES("1631","1","PK105","SALMA JOUNARASTI","19-Dec-18","","17:15","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1632","1","PK105","SALMA JOUNARASTI","20-Dec-18","08:04","17:11","00:04","");
INSERT INTO tbl_presensi_karyawan VALUES("1633","1","PK105","SALMA JOUNARASTI","21-Dec-18","07:14","17:39","","");
INSERT INTO tbl_presensi_karyawan VALUES("1634","1","PK105","SALMA JOUNARASTI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1635","1","PK105","SALMA JOUNARASTI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1636","1","PK105","SALMA JOUNARASTI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1637","1","PK105","SALMA JOUNARASTI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1638","1","PK105","SALMA JOUNARASTI","26-Dec-18","","18:24","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1639","1","PK105","SALMA JOUNARASTI","27-Dec-18","08:03","17:37","00:03","");
INSERT INTO tbl_presensi_karyawan VALUES("1640","1","PK105","SALMA JOUNARASTI","28-Dec-18","08:08","17:58","00:08","");
INSERT INTO tbl_presensi_karyawan VALUES("1641","1","PK105","SALMA JOUNARASTI","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1642","1","PK105","SALMA JOUNARASTI","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1643","1","PK105","SALMA JOUNARASTI","31-Dec-18","","17:10","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1644","1","10099","RONI YUSNANDAR","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1645","1","10099","RONI YUSNANDAR","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1646","1","10099","RONI YUSNANDAR","03-Dec-18","09:38","","01:38","");
INSERT INTO tbl_presensi_karyawan VALUES("1647","1","10099","RONI YUSNANDAR","04-Dec-18","07:22","17:05","","");
INSERT INTO tbl_presensi_karyawan VALUES("1648","1","10099","RONI YUSNANDAR","05-Dec-18","07:18","17:04","","");
INSERT INTO tbl_presensi_karyawan VALUES("1649","1","10099","RONI YUSNANDAR","06-Dec-18","","16:35","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1650","1","10099","RONI YUSNANDAR","07-Dec-18","06:36","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1651","1","10099","RONI YUSNANDAR","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1652","1","10099","RONI YUSNANDAR","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1653","1","10099","RONI YUSNANDAR","10-Dec-18","06:51","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1654","1","10099","RONI YUSNANDAR","11-Dec-18","07:21","17:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1655","1","10099","RONI YUSNANDAR","12-Dec-18","07:16","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1656","1","10099","RONI YUSNANDAR","13-Dec-18","07:28","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1657","1","10099","RONI YUSNANDAR","14-Dec-18","06:51","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1658","1","10099","RONI YUSNANDAR","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1659","1","10099","RONI YUSNANDAR","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1660","1","10099","RONI YUSNANDAR","17-Dec-18","10:38","17:03","02:38","");
INSERT INTO tbl_presensi_karyawan VALUES("1661","1","10099","RONI YUSNANDAR","18-Dec-18","06:24","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1662","1","10099","RONI YUSNANDAR","19-Dec-18","07:12","17:00","","");
INSERT INTO tbl_presensi_karyawan VALUES("1663","1","10099","RONI YUSNANDAR","20-Dec-18","07:16","17:02","","");
INSERT INTO tbl_presensi_karyawan VALUES("1664","1","10099","RONI YUSNANDAR","21-Dec-18","06:52","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1665","1","10099","RONI YUSNANDAR","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1666","1","10099","RONI YUSNANDAR","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1667","1","10099","RONI YUSNANDAR","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1668","1","10099","RONI YUSNANDAR","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1669","1","10099","RONI YUSNANDAR","26-Dec-18","06:02","17:06","","");
INSERT INTO tbl_presensi_karyawan VALUES("1670","1","10099","RONI YUSNANDAR","27-Dec-18","07:20","17:01","","");
INSERT INTO tbl_presensi_karyawan VALUES("1671","1","10099","RONI YUSNANDAR","28-Dec-18","06:56","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1672","1","10099","RONI YUSNANDAR","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1673","1","10099","RONI YUSNANDAR","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1674","1","10099","RONI YUSNANDAR","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1675","1","D0009","DIAN TAKDIR","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1676","1","D0009","DIAN TAKDIR","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1677","1","D0009","DIAN TAKDIR","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1678","1","D0009","DIAN TAKDIR","04-Dec-18","09:05","17:38","01:05","");
INSERT INTO tbl_presensi_karyawan VALUES("1679","1","D0009","DIAN TAKDIR","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1680","1","D0009","DIAN TAKDIR","06-Dec-18","09:17","","01:17","");
INSERT INTO tbl_presensi_karyawan VALUES("1681","1","D0009","DIAN TAKDIR","07-Dec-18","10:13","15:43","02:13","");
INSERT INTO tbl_presensi_karyawan VALUES("1682","1","D0009","DIAN TAKDIR","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1683","1","D0009","DIAN TAKDIR","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1684","1","D0009","DIAN TAKDIR","10-Dec-18","14:22","17:16","06:22","");
INSERT INTO tbl_presensi_karyawan VALUES("1685","1","D0009","DIAN TAKDIR","11-Dec-18","13:21","","05:21","");
INSERT INTO tbl_presensi_karyawan VALUES("1686","1","D0009","DIAN TAKDIR","12-Dec-18","08:07","","00:07","");
INSERT INTO tbl_presensi_karyawan VALUES("1687","1","D0009","DIAN TAKDIR","13-Dec-18","08:21","","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("1688","1","D0009","DIAN TAKDIR","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1689","1","D0009","DIAN TAKDIR","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1690","1","D0009","DIAN TAKDIR","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1691","1","D0009","DIAN TAKDIR","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1692","1","D0009","DIAN TAKDIR","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1693","1","D0009","DIAN TAKDIR","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1694","1","D0009","DIAN TAKDIR","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1695","1","D0009","DIAN TAKDIR","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1696","1","D0009","DIAN TAKDIR","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1697","1","D0009","DIAN TAKDIR","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1698","1","D0009","DIAN TAKDIR","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1699","1","D0009","DIAN TAKDIR","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1700","1","D0009","DIAN TAKDIR","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1701","1","D0009","DIAN TAKDIR","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1702","1","D0009","DIAN TAKDIR","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1703","1","D0009","DIAN TAKDIR","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1704","1","D0009","DIAN TAKDIR","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1705","1","D0009","DIAN TAKDIR","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1706","1","10004","DIAN AGUSTIAN HADI","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1707","1","10004","DIAN AGUSTIAN HADI","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1708","1","10004","DIAN AGUSTIAN HADI","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1709","1","10004","DIAN AGUSTIAN HADI","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1710","1","10004","DIAN AGUSTIAN HADI","05-Dec-18","08:21","15:35","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("1711","1","10004","DIAN AGUSTIAN HADI","06-Dec-18","08:21","19:12","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("1712","1","10004","DIAN AGUSTIAN HADI","07-Dec-18","10:12","17:44","02:12","");
INSERT INTO tbl_presensi_karyawan VALUES("1713","1","10004","DIAN AGUSTIAN HADI","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1714","1","10004","DIAN AGUSTIAN HADI","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1715","1","10004","DIAN AGUSTIAN HADI","10-Dec-18","14:33","17:55","06:33","");
INSERT INTO tbl_presensi_karyawan VALUES("1716","1","10004","DIAN AGUSTIAN HADI","11-Dec-18","07:50","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1717","1","10004","DIAN AGUSTIAN HADI","12-Dec-18","08:03","18:31","00:03","");
INSERT INTO tbl_presensi_karyawan VALUES("1718","1","10004","DIAN AGUSTIAN HADI","13-Dec-18","07:49","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1719","1","10004","DIAN AGUSTIAN HADI","14-Dec-18","09:14","16:56","01:14","");
INSERT INTO tbl_presensi_karyawan VALUES("1720","1","10004","DIAN AGUSTIAN HADI","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1721","1","10004","DIAN AGUSTIAN HADI","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1722","1","10004","DIAN AGUSTIAN HADI","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1723","1","10004","DIAN AGUSTIAN HADI","18-Dec-18","07:51","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1724","1","10004","DIAN AGUSTIAN HADI","19-Dec-18","","16:08","01:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1725","1","10004","DIAN AGUSTIAN HADI","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1726","1","10004","DIAN AGUSTIAN HADI","21-Dec-18","08:01","19:12","00:01","");
INSERT INTO tbl_presensi_karyawan VALUES("1727","1","10004","DIAN AGUSTIAN HADI","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1728","1","10004","DIAN AGUSTIAN HADI","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1729","1","10004","DIAN AGUSTIAN HADI","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1730","1","10004","DIAN AGUSTIAN HADI","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1731","1","10004","DIAN AGUSTIAN HADI","26-Dec-18","08:00","22:42","00:00","");
INSERT INTO tbl_presensi_karyawan VALUES("1732","1","10004","DIAN AGUSTIAN HADI","27-Dec-18","08:04","22:45","00:04","");
INSERT INTO tbl_presensi_karyawan VALUES("1733","1","10004","DIAN AGUSTIAN HADI","28-Dec-18","08:21","21:44","00:21","");
INSERT INTO tbl_presensi_karyawan VALUES("1734","1","10004","DIAN AGUSTIAN HADI","29-Dec-18","10:18","19:15","","");
INSERT INTO tbl_presensi_karyawan VALUES("1735","1","10004","DIAN AGUSTIAN HADI","30-Dec-18","10:42","18:29","","");
INSERT INTO tbl_presensi_karyawan VALUES("1736","1","10004","DIAN AGUSTIAN HADI","31-Dec-18","07:33","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1737","1","10101","TONY TRI HENDARTA","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1738","1","10101","TONY TRI HENDARTA","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1739","1","10101","TONY TRI HENDARTA","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1740","1","10101","TONY TRI HENDARTA","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1741","1","10101","TONY TRI HENDARTA","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1742","1","10101","TONY TRI HENDARTA","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1743","1","10101","TONY TRI HENDARTA","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1744","1","10101","TONY TRI HENDARTA","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1745","1","10101","TONY TRI HENDARTA","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1746","1","10101","TONY TRI HENDARTA","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1747","1","10101","TONY TRI HENDARTA","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1748","1","10101","TONY TRI HENDARTA","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1749","1","10101","TONY TRI HENDARTA","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1750","1","10101","TONY TRI HENDARTA","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1751","1","10101","TONY TRI HENDARTA","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1752","1","10101","TONY TRI HENDARTA","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1753","1","10101","TONY TRI HENDARTA","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1754","1","10101","TONY TRI HENDARTA","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1755","1","10101","TONY TRI HENDARTA","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1756","1","10101","TONY TRI HENDARTA","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1757","1","10101","TONY TRI HENDARTA","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1758","1","10101","TONY TRI HENDARTA","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1759","1","10101","TONY TRI HENDARTA","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1760","1","10101","TONY TRI HENDARTA","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1761","1","10101","TONY TRI HENDARTA","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1762","1","10101","TONY TRI HENDARTA","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1763","1","10101","TONY TRI HENDARTA","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1764","1","10101","TONY TRI HENDARTA","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1765","1","10101","TONY TRI HENDARTA","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1766","1","10101","TONY TRI HENDARTA","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1767","1","10101","TONY TRI HENDARTA","31-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1768","1","PK109","ELISA SOEDARTO","01-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1769","1","PK109","ELISA SOEDARTO","02-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1770","1","PK109","ELISA SOEDARTO","03-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1771","1","PK109","ELISA SOEDARTO","04-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1772","1","PK109","ELISA SOEDARTO","05-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1773","1","PK109","ELISA SOEDARTO","06-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1774","1","PK109","ELISA SOEDARTO","07-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1775","1","PK109","ELISA SOEDARTO","08-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1776","1","PK109","ELISA SOEDARTO","09-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1777","1","PK109","ELISA SOEDARTO","10-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1778","1","PK109","ELISA SOEDARTO","11-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1779","1","PK109","ELISA SOEDARTO","12-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1780","1","PK109","ELISA SOEDARTO","13-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1781","1","PK109","ELISA SOEDARTO","14-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1782","1","PK109","ELISA SOEDARTO","15-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1783","1","PK109","ELISA SOEDARTO","16-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1784","1","PK109","ELISA SOEDARTO","17-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1785","1","PK109","ELISA SOEDARTO","18-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1786","1","PK109","ELISA SOEDARTO","19-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1787","1","PK109","ELISA SOEDARTO","20-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1788","1","PK109","ELISA SOEDARTO","21-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1789","1","PK109","ELISA SOEDARTO","22-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1790","1","PK109","ELISA SOEDARTO","23-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1791","1","PK109","ELISA SOEDARTO","24-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1792","1","PK109","ELISA SOEDARTO","25-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1793","1","PK109","ELISA SOEDARTO","26-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1794","1","PK109","ELISA SOEDARTO","27-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1795","1","PK109","ELISA SOEDARTO","28-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1796","1","PK109","ELISA SOEDARTO","29-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1797","1","PK109","ELISA SOEDARTO","30-Dec-18","","","","");
INSERT INTO tbl_presensi_karyawan VALUES("1798","1","PK109","ELISA SOEDARTO","31-Dec-18","","","","");



DROP TABLE tbl_ref_bank;

CREATE TABLE `tbl_ref_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_bank` int(25) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_bank VALUES("1","1","Bank Mandiri");
INSERT INTO tbl_ref_bank VALUES("2","2","Bank BCA");
INSERT INTO tbl_ref_bank VALUES("3","3","Bank Mandiri Syariah");
INSERT INTO tbl_ref_bank VALUES("4","4","BNI 46");
INSERT INTO tbl_ref_bank VALUES("5","5","Bank Jabar Banten (BJB)");
INSERT INTO tbl_ref_bank VALUES("6","6","BNI Syariah");
INSERT INTO tbl_ref_bank VALUES("7","7","BRI");
INSERT INTO tbl_ref_bank VALUES("8","8","Bank BNI");



DROP TABLE tbl_ref_divisi;

CREATE TABLE `tbl_ref_divisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(25) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_divisi VALUES("1","1","Direktur");
INSERT INTO tbl_ref_divisi VALUES("2","2","SDM Dan Umum");
INSERT INTO tbl_ref_divisi VALUES("3","3","Keuangan");
INSERT INTO tbl_ref_divisi VALUES("4","4","Teknik");
INSERT INTO tbl_ref_divisi VALUES("5","5","Pengembangan Bisnis");
INSERT INTO tbl_ref_divisi VALUES("6","6","Marketing");
INSERT INTO tbl_ref_divisi VALUES("7","7","TIP");
INSERT INTO tbl_ref_divisi VALUES("8","8","Koperasi");



DROP TABLE tbl_ref_jabatan;

CREATE TABLE `tbl_ref_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) NOT NULL,
  `kode_unit` int(25) NOT NULL,
  `kode_sub` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_jabatan VALUES("1","KOMISARIS UTAMA","1","0");
INSERT INTO tbl_ref_jabatan VALUES("2","KOMISARIS","1","0");
INSERT INTO tbl_ref_jabatan VALUES("3","SEKRETARIS KOMISARIS","1","0");
INSERT INTO tbl_ref_jabatan VALUES("4","DIREKTUR UTAMA","1","0");
INSERT INTO tbl_ref_jabatan VALUES("5","DIREKTUR TEKNIK","1","1");
INSERT INTO tbl_ref_jabatan VALUES("6","DIREKTUR KEUANGAN DAN UMUM","1","1");
INSERT INTO tbl_ref_jabatan VALUES("7","----  DEPARTEMEN MARKETING & SALES  ----  ","2","2");
INSERT INTO tbl_ref_jabatan VALUES("8","GENERAL MANAGER MARKETING & SALES","2","2");
INSERT INTO tbl_ref_jabatan VALUES("9","OFFICER ADMINISTRATION","2","2");
INSERT INTO tbl_ref_jabatan VALUES("10","MANAGER MARKETING","2","2");
INSERT INTO tbl_ref_jabatan VALUES("11","ASSISTANT MANAGER CORPORATE RELATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("12","ASSISTANT MANAGER CORPORATE RELATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("13","SENIOR OFFICER CORPORATE RELATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("14","ASSISTANT MANAGER EVENT & PROMOTION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("15","SENIOR OFFICER EVENT & PROMOTION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("16","ASSISTANT MANAGER CONTENT & MEDIA","2","3");
INSERT INTO tbl_ref_jabatan VALUES("17","SENIOR OFFICER CONTENT & MEDIA","2","0");
INSERT INTO tbl_ref_jabatan VALUES("18","MANAGER SALES & FORCE","2","0");
INSERT INTO tbl_ref_jabatan VALUES("19","ASSISTANT MANAGER COMMERCIAL","2","0");
INSERT INTO tbl_ref_jabatan VALUES("20","OFFICER ADMINISTRATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("21","ASSISTANT MANAGER RESIDENCIAL","2","0");
INSERT INTO tbl_ref_jabatan VALUES("22","OFFICER ADMINISTRATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("23","ASSISTANT MANAGER REST AREA","2","0");
INSERT INTO tbl_ref_jabatan VALUES("24","OFFICER ADMINISTRATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("25","MANAGER ASSET MANAGEMENT","2","0");
INSERT INTO tbl_ref_jabatan VALUES("26","ASSISTANT MANAGER ASSET MANAGEMENT","2","0");
INSERT INTO tbl_ref_jabatan VALUES("27","SUPERVISOR AREA BUILDING","2","0");
INSERT INTO tbl_ref_jabatan VALUES("28","OFFICER FINANCE ADMINISTRATION","2","0");
INSERT INTO tbl_ref_jabatan VALUES("29","MARKETING EXECUTIVE OFFICER","2","0");
INSERT INTO tbl_ref_jabatan VALUES("30","RECEPTIONIST OFFICER","2","0");
INSERT INTO tbl_ref_jabatan VALUES("31","----  DEPARTEMENT BUSINESS DEVELOPMENT  ----  ","3","0");
INSERT INTO tbl_ref_jabatan VALUES("32","GENERAL MANAGER BUSINESS DEVELOPMENT","3","0");
INSERT INTO tbl_ref_jabatan VALUES("33","OFFICER ADMINISTRATION","3","0");
INSERT INTO tbl_ref_jabatan VALUES("34","MANAGER PROPERTY DEVELOPMENT","3","0");
INSERT INTO tbl_ref_jabatan VALUES("35","ASSISTANT MANAGER PROPERTY PLANNING","3","0");
INSERT INTO tbl_ref_jabatan VALUES("36","SENIOR OFFICER PLANNING","3","0");
INSERT INTO tbl_ref_jabatan VALUES("37","ASSISTANT MANAGER PROPERTY CONTROLLING","3","0");
INSERT INTO tbl_ref_jabatan VALUES("38","MANAGER RELATED BUSINESS DEVELOPMENT","3","0");
INSERT INTO tbl_ref_jabatan VALUES("39","ASSISTANT MANAGER RELATED BUSINESS PLANNING","3","0");
INSERT INTO tbl_ref_jabatan VALUES("40","ASSISTANT MANAGER RELATED BUSINESS CONTROLLING","3","0");
INSERT INTO tbl_ref_jabatan VALUES("41","MANAGER LAND AND PERMIT","3","0");
INSERT INTO tbl_ref_jabatan VALUES("42","ASSISTANT MANAGER LAND ACQUISITION","3","0");
INSERT INTO tbl_ref_jabatan VALUES("43","SENIOR OFFICER LAND ACQUISITION","3","0");
INSERT INTO tbl_ref_jabatan VALUES("44","ASSISTANT MANAGER PERMIT","3","0");
INSERT INTO tbl_ref_jabatan VALUES("45","----  DEPARTEMEN ENGINEERING  ----  ","4","0");
INSERT INTO tbl_ref_jabatan VALUES("46","GENERAL MANAGER ENGINEERING","4","0");
INSERT INTO tbl_ref_jabatan VALUES("47","OFFICER ADMINISTRATION","4","0");
INSERT INTO tbl_ref_jabatan VALUES("48","MANAGER PROPERTY ENGINEERING & MAINTENANCE","4","0");
INSERT INTO tbl_ref_jabatan VALUES("49","ASSISTANT MANAGER PLANNING & MAINTENANCE","4","0");
INSERT INTO tbl_ref_jabatan VALUES("50","SENIOR OFFICER COST ESTIMATOR","4","0");
INSERT INTO tbl_ref_jabatan VALUES("51","SENIOR OFFICER EVALUATION","4","0");
INSERT INTO tbl_ref_jabatan VALUES("52","OFFICER DATA EVALUATION","4","0");
INSERT INTO tbl_ref_jabatan VALUES("53","ASSISTANT MANAGER ARCHITECTURAL & MAINTENANCE","4","0");
INSERT INTO tbl_ref_jabatan VALUES("54","SENIOR OFFICER ARCHITECTURAL","4","0");
INSERT INTO tbl_ref_jabatan VALUES("55","MANAGER BUSINESS ENGINEERING & MAINTENANCE","4","0");
INSERT INTO tbl_ref_jabatan VALUES("56","ASSISTANT MANAGER QUALITY CONTROL & MAINTENANCE","4","0");
INSERT INTO tbl_ref_jabatan VALUES("57","SENIOR OFFICER QUALITY CONTROL","4","0");
INSERT INTO tbl_ref_jabatan VALUES("58","ASSISTANT MANAGER PROJECT EXECUTION & MAINTENANCE","4","0");
INSERT INTO tbl_ref_jabatan VALUES("59","SENIOR OFFICER PROJECT EXECUTION","4","0");
INSERT INTO tbl_ref_jabatan VALUES("60","OFFICER DATA EVALUATION","4","0");
INSERT INTO tbl_ref_jabatan VALUES("61","----  PROJECTS PROPERTY  ----  ","5","0");
INSERT INTO tbl_ref_jabatan VALUES("62","PROJECT MANAGER","5","0");
INSERT INTO tbl_ref_jabatan VALUES("63","MARKETING SUPERVISOR ","5","0");
INSERT INTO tbl_ref_jabatan VALUES("64","MARKETING EXECUTIVE OFFICER","5","0");
INSERT INTO tbl_ref_jabatan VALUES("65","MARKETING ADMINISTRATION OFFICER","5","0");
INSERT INTO tbl_ref_jabatan VALUES("66","OFFICER FINANCE & ADMINISTRATION","5","0");
INSERT INTO tbl_ref_jabatan VALUES("67","SITE MANAGER","5","0");
INSERT INTO tbl_ref_jabatan VALUES("68","SENIOR OFFICER QUALITY CONTROL","5","0");
INSERT INTO tbl_ref_jabatan VALUES("69","SENIOR OFFICER PROJECT EXECUTION","5","0");
INSERT INTO tbl_ref_jabatan VALUES("70","SENIOR OFFICER PROJECT ADMINISTRATION","5","0");
INSERT INTO tbl_ref_jabatan VALUES("71","SENIOR OFFICER FINANCE & ADMINISTRATION","5","0");
INSERT INTO tbl_ref_jabatan VALUES("72","OFFICER FIELD PROJECT","5","0");
INSERT INTO tbl_ref_jabatan VALUES("73","SENIOR OFFICER ARCHITECTUR","5","0");
INSERT INTO tbl_ref_jabatan VALUES("74","----  DEPARTEMEN RELATED BUSINESS OPERATION  ----  ","10","0");
INSERT INTO tbl_ref_jabatan VALUES("75","GENERAL MANAGER RELATED BUSINESS OPERATION","10","0");
INSERT INTO tbl_ref_jabatan VALUES("76","OFFICER ADMINISTRATION","10","0");
INSERT INTO tbl_ref_jabatan VALUES("77","BENDAHARA","10","0");
INSERT INTO tbl_ref_jabatan VALUES("78","OFFICER ADMINISTRATION FINANCE","10","0");
INSERT INTO tbl_ref_jabatan VALUES("79","MANAGER UTILITIES & ADVERTISING","10","0");
INSERT INTO tbl_ref_jabatan VALUES("80","ASSISTANT MANAGER UTILITIES","10","0");
INSERT INTO tbl_ref_jabatan VALUES("81","ASSISTANT MANAGER ADVERTISING","10","0");
INSERT INTO tbl_ref_jabatan VALUES("82","SENIOR OFFICER DATA ADMINISTRATION","10","0");
INSERT INTO tbl_ref_jabatan VALUES("83","MANAGER REST AREA CONTROL","10","0");
INSERT INTO tbl_ref_jabatan VALUES("84","ASSISTANT MANAGER REST AREA CONTROLLING","10","0");
INSERT INTO tbl_ref_jabatan VALUES("85","SENIOR OFFICER DATA ADMINISTRATION","10","0");
INSERT INTO tbl_ref_jabatan VALUES("86","----  REST AREA PURBALEUNYI  ----","11","0");
INSERT INTO tbl_ref_jabatan VALUES("87","MANAGER REST AREA","11","0");
INSERT INTO tbl_ref_jabatan VALUES("88","SUPERVISOR AREA","11","0");
INSERT INTO tbl_ref_jabatan VALUES("89","ACCOUNT EXECUTIVE","11","0");
INSERT INTO tbl_ref_jabatan VALUES("90","FINANCIAL ACCOUNTING","11","0");
INSERT INTO tbl_ref_jabatan VALUES("91","ENGINEERING","11","0");
INSERT INTO tbl_ref_jabatan VALUES("92","SENIOR OFFICER SPBU TIP","11","0");
INSERT INTO tbl_ref_jabatan VALUES("93","OFFICER SPBU TIP","11","0");
INSERT INTO tbl_ref_jabatan VALUES("94","----  DEPARTEMEN FINANCE & ACCOUNTING  ----  ","18","0");
INSERT INTO tbl_ref_jabatan VALUES("95","GENERAL MANAGER FINANCE & ACCOUNTING","18","0");
INSERT INTO tbl_ref_jabatan VALUES("96","MANAGER FINANCE & BUDGETING","18","0");
INSERT INTO tbl_ref_jabatan VALUES("97","ASSISTANT MANAGER BUDGETING","18","0");
INSERT INTO tbl_ref_jabatan VALUES("98","MANAGER TREASURY","18","0");
INSERT INTO tbl_ref_jabatan VALUES("99","BENDAHARA","18","0");
INSERT INTO tbl_ref_jabatan VALUES("100","ASSISTANT MANAGER FINANCE","18","0");
INSERT INTO tbl_ref_jabatan VALUES("101","MANAGER ACCOUNTING & TAX","18","0");
INSERT INTO tbl_ref_jabatan VALUES("102","ASSISTANT MANAGER ACCOUNTING","18","0");
INSERT INTO tbl_ref_jabatan VALUES("103","SENIOR OFFICER ACCOUNTING","18","0");
INSERT INTO tbl_ref_jabatan VALUES("104","ASSISTANT MANAGER TAX","18","0");
INSERT INTO tbl_ref_jabatan VALUES("105","----  DEPARTEMENT HR & GENERAL AFFAIR  ----  ","19","0");
INSERT INTO tbl_ref_jabatan VALUES("106","GENERAL MANAGER HR & GENERAL AFFAIR","19","0");
INSERT INTO tbl_ref_jabatan VALUES("107","ADVISOR","19","0");
INSERT INTO tbl_ref_jabatan VALUES("108","MANAGER HR & GENERAL AFFAIR","19","0");
INSERT INTO tbl_ref_jabatan VALUES("109","ASSISTANT MANAGER REMUNERATION","19","0");
INSERT INTO tbl_ref_jabatan VALUES("110","ASSISTANT MANAGER GENERAL AFFAIR","19","0");
INSERT INTO tbl_ref_jabatan VALUES("111","ASSISTANT MANAGER PROCUREMENT","19","0");
INSERT INTO tbl_ref_jabatan VALUES("113","ASSISTANT MANAGER DATA ADMINISTRASI","19","0");
INSERT INTO tbl_ref_jabatan VALUES("114","SENIOR OFFICER HR","19","0");
INSERT INTO tbl_ref_jabatan VALUES("115","SECRETARY DIRECTOR ","19","0");
INSERT INTO tbl_ref_jabatan VALUES("116","OFFICER ADMINISTRATION","19","0");
INSERT INTO tbl_ref_jabatan VALUES("117","OFFICER GENERAL AFFAIR","19","0");
INSERT INTO tbl_ref_jabatan VALUES("118","RECEPTIONIST ","19","0");
INSERT INTO tbl_ref_jabatan VALUES("119","MANAGER LEGAL & COMPLIANCE","19","0");
INSERT INTO tbl_ref_jabatan VALUES("120","ASSISTANT MANAGER LEGAL","19","0");
INSERT INTO tbl_ref_jabatan VALUES("121","ASSISTANT MANAGER COMPLIANCE","19","0");
INSERT INTO tbl_ref_jabatan VALUES("122","MANAGER INFORMATION TECHNOLOGY","19","0");
INSERT INTO tbl_ref_jabatan VALUES("123","SENIOR OFFICER IT","19","0");
INSERT INTO tbl_ref_jabatan VALUES("124","OFFICER IT","19","0");
INSERT INTO tbl_ref_jabatan VALUES("125","---- REST AREA PALIKANCI ---- ","12","0");
INSERT INTO tbl_ref_jabatan VALUES("126","MANAGER REST AREA","12","0");
INSERT INTO tbl_ref_jabatan VALUES("127","SUPERVISOR AREA","12","0");
INSERT INTO tbl_ref_jabatan VALUES("128","ACCOUNT EXECUTIVE","12","0");
INSERT INTO tbl_ref_jabatan VALUES("129","FINANCIAL ACCOUNTING","12","0");
INSERT INTO tbl_ref_jabatan VALUES("130","ENGINEERING","12","0");
INSERT INTO tbl_ref_jabatan VALUES("131","SENIOR OFFICER SPBU TIP","12","0");
INSERT INTO tbl_ref_jabatan VALUES("132","OFFICER SPBU TIP","12","0");
INSERT INTO tbl_ref_jabatan VALUES("134","----  RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)  ----","6","0");
INSERT INTO tbl_ref_jabatan VALUES("135","SITE MANAGER","6","0");
INSERT INTO tbl_ref_jabatan VALUES("136","PROJECT MANAGER","6","0");
INSERT INTO tbl_ref_jabatan VALUES("137","----  RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)  ---- ","7","0");
INSERT INTO tbl_ref_jabatan VALUES("138","PROJECT MANAGER","7","0");
INSERT INTO tbl_ref_jabatan VALUES("139","SITE MANAGER","7","0");
INSERT INTO tbl_ref_jabatan VALUES("140","----  RUAS PROYEK JASAMARGA KERTOSONO NGAWI (JKN)  ----","8","0");
INSERT INTO tbl_ref_jabatan VALUES("141","PROJECT MANAGER","8","0");
INSERT INTO tbl_ref_jabatan VALUES("142","SITE MANAGER","8","0");
INSERT INTO tbl_ref_jabatan VALUES("143","----  RUAS PROYEK JASAMARGA GEMPOL PASURUAN (JGP)  ----","9","0");
INSERT INTO tbl_ref_jabatan VALUES("144","PROJECT MANAGER ","9","0");
INSERT INTO tbl_ref_jabatan VALUES("145","SITE MANAGER","9","0");
INSERT INTO tbl_ref_jabatan VALUES("146","----  REST AREA JASAMARGA SEMARANG BATANG (JSB)  ----","13","0");
INSERT INTO tbl_ref_jabatan VALUES("147","MANAGER REST AREA","13","0");
INSERT INTO tbl_ref_jabatan VALUES("148","SUPERVISOR AREA","13","0");
INSERT INTO tbl_ref_jabatan VALUES("149","ACCOUNT EXECUTIVE","13","0");
INSERT INTO tbl_ref_jabatan VALUES("150","FINANCIAL ACCOUNTING","13","0");
INSERT INTO tbl_ref_jabatan VALUES("151","ENGINEERING","13","0");
INSERT INTO tbl_ref_jabatan VALUES("152","SENIOR OFFICER SPBU TIP","13","0");
INSERT INTO tbl_ref_jabatan VALUES("153","OFFICER SPBU TIP","13","0");
INSERT INTO tbl_ref_jabatan VALUES("154","----  REST AREA JASAMARGA SOLO NGAWI (JSN)  ---- ","14","0");
INSERT INTO tbl_ref_jabatan VALUES("155","MANAGER REST AREA","14","0");
INSERT INTO tbl_ref_jabatan VALUES("156","SUPERVISOR AREA","14","0");
INSERT INTO tbl_ref_jabatan VALUES("157","ACCOUNT EXECUTIVE","14","0");
INSERT INTO tbl_ref_jabatan VALUES("158","FINANCIAL ACCOUNTING","14","0");
INSERT INTO tbl_ref_jabatan VALUES("159","ENGINEERING","14","0");
INSERT INTO tbl_ref_jabatan VALUES("160","SENIOR OFFICER SPBU TIP","14","0");
INSERT INTO tbl_ref_jabatan VALUES("161","OFFICER SPBU TIP","14","0");
INSERT INTO tbl_ref_jabatan VALUES("162","----  REST AREA JASAMARGA KERTOSONO NGAWI (JKN)  ----","15","0");
INSERT INTO tbl_ref_jabatan VALUES("163","MANAGER REST AREA","15","0");
INSERT INTO tbl_ref_jabatan VALUES("164","SUPERVISOR AREA","15","0");
INSERT INTO tbl_ref_jabatan VALUES("165","ACCOUNT EXECUTIVE","15","0");
INSERT INTO tbl_ref_jabatan VALUES("166","FINANCIAL ACCOUNTING","15","0");
INSERT INTO tbl_ref_jabatan VALUES("167","ENGINEERING","15","0");
INSERT INTO tbl_ref_jabatan VALUES("168","SENIOR OFFICER SPBU TIP","15","0");
INSERT INTO tbl_ref_jabatan VALUES("169","OFFICER SPBU TIP","15","0");
INSERT INTO tbl_ref_jabatan VALUES("170","---- REST AREA JASAMARGA GEMPOL PASURUAN (JGP) ---- ","16","0");
INSERT INTO tbl_ref_jabatan VALUES("171","MANAGER REST AREA","16","0");
INSERT INTO tbl_ref_jabatan VALUES("172","SUPERVISOR AREA","16","0");
INSERT INTO tbl_ref_jabatan VALUES("173","ACCOUNT EXECUTIVE","16","0");
INSERT INTO tbl_ref_jabatan VALUES("174","FINANCIAL ACCOUNTING","16","0");
INSERT INTO tbl_ref_jabatan VALUES("175","ENGINEERING","16","0");
INSERT INTO tbl_ref_jabatan VALUES("176","SENIOR OFFICER SPBU TIP","16","0");
INSERT INTO tbl_ref_jabatan VALUES("177","OFFICER SPBU TIP","16","0");
INSERT INTO tbl_ref_jabatan VALUES("178","----  REST AREA JASAMARGA SURABAYA MOJOKERTO (JSM)  ----","17","0");
INSERT INTO tbl_ref_jabatan VALUES("179","MANAGER REST AREA","17","0");
INSERT INTO tbl_ref_jabatan VALUES("180","SUPERVISOR AREA","17","0");
INSERT INTO tbl_ref_jabatan VALUES("181","ACCOUNT EXECUTIVE","17","0");
INSERT INTO tbl_ref_jabatan VALUES("182","FINANCIAL ACCOUNTING","17","0");
INSERT INTO tbl_ref_jabatan VALUES("183","ENGINEERING","17","0");
INSERT INTO tbl_ref_jabatan VALUES("184","SENIOR OFFICER SPBU TIP","17","0");
INSERT INTO tbl_ref_jabatan VALUES("185","OFFICER SPBU TIP","17","0");
INSERT INTO tbl_ref_jabatan VALUES("186","MANAGER PROPERTY PLANNING","3","0");
INSERT INTO tbl_ref_jabatan VALUES("187","SENIOR OFFICER MARKETING","10","68");
INSERT INTO tbl_ref_jabatan VALUES("189","----  DEPARTEMEN UTILITAS DAN IKLAN ----  ","24","70");
INSERT INTO tbl_ref_jabatan VALUES("190","GENERAL MANAGER UTILITAS DAN IKLAN","24","70");
INSERT INTO tbl_ref_jabatan VALUES("191","----  REST AREA JASAMARGA MEDAN KUALANAMU (JMK)  ----  ","21","64");
INSERT INTO tbl_ref_jabatan VALUES("192","SUPERVISOR AREA","21","64");
INSERT INTO tbl_ref_jabatan VALUES("193","SENIOR OFFICER MARKETING","25","71");
INSERT INTO tbl_ref_jabatan VALUES("194","----  REGIONAL TIP / TI ----  ","25","75");
INSERT INTO tbl_ref_jabatan VALUES("195","SENIOR OFFICER MARKETING","25","75");
INSERT INTO tbl_ref_jabatan VALUES("196","SENIOR OFFICER ENGINEERING","25","73");
INSERT INTO tbl_ref_jabatan VALUES("197","SENIOR OFFICER KEUANGAN","25","73");
INSERT INTO tbl_ref_jabatan VALUES("199","----  DEPARTEMEN ENGINEERING RELATED BUSINESS  ----","26","76");
INSERT INTO tbl_ref_jabatan VALUES("200","GENERAL MANAGER ENGINEERING RELATED BUSINESS","26","76");
INSERT INTO tbl_ref_jabatan VALUES("201","----  DEPARTEMEN KEUANGAN DAN SDMU RELATED BUSINESS  ----","27","77");
INSERT INTO tbl_ref_jabatan VALUES("202","GENERAL MANAGER KEUANGAN DAN SDMU RELATED BUSINESS","27","77");



DROP TABLE tbl_ref_jenis_barang;

CREATE TABLE `tbl_ref_jenis_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jenis_barang` int(255) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_barang` (`kode_jenis_barang`),
  KEY `id_barang_2` (`kode_jenis_barang`,`jenis_barang`),
  KEY `jenis_barang` (`jenis_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_jenis_barang VALUES("1","1","Laptop");
INSERT INTO tbl_ref_jenis_barang VALUES("2","2","Komputer");
INSERT INTO tbl_ref_jenis_barang VALUES("3","3","Monitor");
INSERT INTO tbl_ref_jenis_barang VALUES("4","4","Printer");
INSERT INTO tbl_ref_jenis_barang VALUES("5","5","Kursi");
INSERT INTO tbl_ref_jenis_barang VALUES("6","6","Meja");
INSERT INTO tbl_ref_jenis_barang VALUES("7","7","Lain - Lain");



DROP TABLE tbl_ref_potongan;

CREATE TABLE `tbl_ref_potongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(255) NOT NULL,
  `jenis_bank` int(25) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `no_rekening` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_potongan VALUES("1","THR","0","","0");
INSERT INTO tbl_ref_potongan VALUES("2","Jasa Produksi","0","","0");
INSERT INTO tbl_ref_potongan VALUES("3","Ongkos Cuti","0","","0");
INSERT INTO tbl_ref_potongan VALUES("4","Bantuan Pengobatan","0","","0");
INSERT INTO tbl_ref_potongan VALUES("5","Potongan Kesehatan","0","","0");
INSERT INTO tbl_ref_potongan VALUES("6","Potongan Koperasi","0","","0");
INSERT INTO tbl_ref_potongan VALUES("7"," Koperasi JM Pusat","8","Bank BNI Cabang Jati Negara, KCP Jasa Marga Jkt","8922619");
INSERT INTO tbl_ref_potongan VALUES("8","Iuran Dapen JM","8","Bank BNI Capem Jakarta TIM","2147483647");
INSERT INTO tbl_ref_potongan VALUES("9","Iuran Purnakarya JM","1","Bank Mandiri Cabang Plaza Mandiri, Jakarta","2147483647");
INSERT INTO tbl_ref_potongan VALUES("10","Iuran THT (PNS-JM)","0","","0");
INSERT INTO tbl_ref_potongan VALUES("11","Asuransi Kendaraan","0","","0");
INSERT INTO tbl_ref_potongan VALUES("12","Potongan Saham Jasa Marga","0","","0");
INSERT INTO tbl_ref_potongan VALUES("13","Potongan UMR/UMK/UMP Jasa Marga","8","Bank BNI Cabang Jatinegara","8915476");
INSERT INTO tbl_ref_potongan VALUES("14","Koperasi  JMB 5","0","","0");
INSERT INTO tbl_ref_potongan VALUES("15","Potongan Koperasi Cirebon","0","","0");
INSERT INTO tbl_ref_potongan VALUES("16","Iuran DPLK BNI SIMPONI","0","","0");
INSERT INTO tbl_ref_potongan VALUES("17","Rapel Jaminan Pensiun","0","","0");
INSERT INTO tbl_ref_potongan VALUES("18","Jaminan Pensiun Karyawan (1%)","0","","0");
INSERT INTO tbl_ref_potongan VALUES("19","BPJS Kesehatan Karyawan (1%)","0","","0");
INSERT INTO tbl_ref_potongan VALUES("20","Jamsostek (JHT 2%)","0","","0");
INSERT INTO tbl_ref_potongan VALUES("21","Iuran Pasti","0","","0");
INSERT INTO tbl_ref_potongan VALUES("22","Iuran SKJM","5","Bank BJB Cabang Kramat Jati","2147483647");
INSERT INTO tbl_ref_potongan VALUES("23","Premi Asuransi Multi Guna","0","","0");
INSERT INTO tbl_ref_potongan VALUES("24","Rapel BPJS Kesehatan","0","","0");
INSERT INTO tbl_ref_potongan VALUES("25","Rapel BPJS Ketenagakerjaan","0","","0");
INSERT INTO tbl_ref_potongan VALUES("26","Rapel Purna Karya","0","","0");
INSERT INTO tbl_ref_potongan VALUES("27","Rapel Iuran Pasti","0","","0");
INSERT INTO tbl_ref_potongan VALUES("28","Kehadiran","0","","0");
INSERT INTO tbl_ref_potongan VALUES("29","Potongan lainnya","0","","0");



DROP TABLE tbl_ref_status_karyawan;

CREATE TABLE `tbl_ref_status_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_karyawan` varchar(255) NOT NULL,
  `kode` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_status_karyawan VALUES("1","Komisaris","1");
INSERT INTO tbl_ref_status_karyawan VALUES("2","Direksi","2");
INSERT INTO tbl_ref_status_karyawan VALUES("3","Karyawan Perbantuan","3");
INSERT INTO tbl_ref_status_karyawan VALUES("4","Karyawan Tetap","4");
INSERT INTO tbl_ref_status_karyawan VALUES("5","PKWT","5");
INSERT INTO tbl_ref_status_karyawan VALUES("6","Koperasi","6");



DROP TABLE tbl_ref_tgl_merah;

CREATE TABLE `tbl_ref_tgl_merah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_merah` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_tgl_merah VALUES("7","2019-01-01");
INSERT INTO tbl_ref_tgl_merah VALUES("9","2019-02-05");
INSERT INTO tbl_ref_tgl_merah VALUES("10","2018-12-25");
INSERT INTO tbl_ref_tgl_merah VALUES("11","2018-12-24");



DROP TABLE tbl_role;

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin` (`admin`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO tbl_role VALUES("1","1","Super Admin");
INSERT INTO tbl_role VALUES("3","2","Direktur Utama");
INSERT INTO tbl_role VALUES("4","3","Direktur");
INSERT INTO tbl_role VALUES("7","4","General Manager");
INSERT INTO tbl_role VALUES("9","5","Manager");
INSERT INTO tbl_role VALUES("10","6","Assistant Manager");
INSERT INTO tbl_role VALUES("11","7","Senior Officer");
INSERT INTO tbl_role VALUES("12","8","Officer");
INSERT INTO tbl_role VALUES("13","9","Koperasi");
INSERT INTO tbl_role VALUES("14","10","Komisaris");



DROP TABLE tbl_sett;

CREATE TABLE `tbl_sett` (
  `id_sett` tinyint(1) NOT NULL,
  `surat_masuk` tinyint(2) NOT NULL,
  `surat_keluar` tinyint(2) NOT NULL,
  `presensi` varchar(255) NOT NULL,
  `referensi` tinyint(2) NOT NULL,
  `id_user` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_sett`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_sett VALUES("1","20","20","20","0","8");



DROP TABLE tbl_sppd;

CREATE TABLE `tbl_sppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `keberangkatan` varchar(255) NOT NULL,
  `destinasi` varchar(255) NOT NULL,
  `maksud` varchar(255) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  `status_direktur` int(2) NOT NULL,
  `status_sdm` int(11) NOT NULL,
  `status_umum` int(3) NOT NULL,
  `file` varchar(255) NOT NULL,
  `divisi` int(2) NOT NULL,
  `baca` int(2) NOT NULL,
  `uang_saku` varchar(255) NOT NULL,
  `uang_makan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_spring;

CREATE TABLE `tbl_spring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=471 DEFAULT CHARSET=latin1;

INSERT INTO tbl_spring VALUES("1","1","AF","1");
INSERT INTO tbl_spring VALUES("2","2","AF","1");
INSERT INTO tbl_spring VALUES("3","3","AF","1");
INSERT INTO tbl_spring VALUES("4","5","AF","1");
INSERT INTO tbl_spring VALUES("5","6","AF","1");
INSERT INTO tbl_spring VALUES("6","7","AF","1");
INSERT INTO tbl_spring VALUES("7","8","AF","1");
INSERT INTO tbl_spring VALUES("8","9","AF","0");
INSERT INTO tbl_spring VALUES("9","10","AF","0");
INSERT INTO tbl_spring VALUES("10","11","AF","0");
INSERT INTO tbl_spring VALUES("11","12","AF","0");
INSERT INTO tbl_spring VALUES("12","14","AF","0");
INSERT INTO tbl_spring VALUES("13","15","AF","0");
INSERT INTO tbl_spring VALUES("14","16","AF","0");
INSERT INTO tbl_spring VALUES("15","17","AF","0");
INSERT INTO tbl_spring VALUES("16","18","AF","0");
INSERT INTO tbl_spring VALUES("17","19","AF","0");
INSERT INTO tbl_spring VALUES("18","20","AF","0");
INSERT INTO tbl_spring VALUES("19","21","AF","0");
INSERT INTO tbl_spring VALUES("20","22","AF","0");
INSERT INTO tbl_spring VALUES("21","23","AF","0");
INSERT INTO tbl_spring VALUES("22","24","AF","0");
INSERT INTO tbl_spring VALUES("23","25","AF","0");
INSERT INTO tbl_spring VALUES("24","26","AF","0");
INSERT INTO tbl_spring VALUES("25","27","AF","0");
INSERT INTO tbl_spring VALUES("37","1","AF1","1");
INSERT INTO tbl_spring VALUES("38","2","AF1","0");
INSERT INTO tbl_spring VALUES("39","3","AF1","0");
INSERT INTO tbl_spring VALUES("40","5","AF1","0");
INSERT INTO tbl_spring VALUES("41","6","AF1","0");
INSERT INTO tbl_spring VALUES("42","7","AF1","0");
INSERT INTO tbl_spring VALUES("43","1","AF7","0");
INSERT INTO tbl_spring VALUES("44","2","AF7","0");
INSERT INTO tbl_spring VALUES("45","3","AF7","0");
INSERT INTO tbl_spring VALUES("46","5","AF7","0");
INSERT INTO tbl_spring VALUES("47","6","AF7","0");
INSERT INTO tbl_spring VALUES("48","7","AF7","0");
INSERT INTO tbl_spring VALUES("49","1","AF3","0");
INSERT INTO tbl_spring VALUES("50","2","AF3","0");
INSERT INTO tbl_spring VALUES("51","3","AF3","0");
INSERT INTO tbl_spring VALUES("52","5","AF3","0");
INSERT INTO tbl_spring VALUES("53","6","AF3","0");
INSERT INTO tbl_spring VALUES("54","7","AF3","0");
INSERT INTO tbl_spring VALUES("55","8","AF3","0");
INSERT INTO tbl_spring VALUES("56","9","AF3","0");
INSERT INTO tbl_spring VALUES("57","10","AF3","0");
INSERT INTO tbl_spring VALUES("58","11","AF3","0");
INSERT INTO tbl_spring VALUES("59","12","AF3","1");
INSERT INTO tbl_spring VALUES("60","14","AF3","0");
INSERT INTO tbl_spring VALUES("61","15","AF3","0");
INSERT INTO tbl_spring VALUES("62","16","AF3","0");
INSERT INTO tbl_spring VALUES("63","17","AF3","0");
INSERT INTO tbl_spring VALUES("64","18","AF3","0");
INSERT INTO tbl_spring VALUES("65","19","AF3","0");
INSERT INTO tbl_spring VALUES("66","20","AF3","0");
INSERT INTO tbl_spring VALUES("67","21","AF3","0");
INSERT INTO tbl_spring VALUES("68","22","AF3","0");
INSERT INTO tbl_spring VALUES("69","1","AF4","0");
INSERT INTO tbl_spring VALUES("70","2","AF4","0");
INSERT INTO tbl_spring VALUES("71","3","AF4","0");
INSERT INTO tbl_spring VALUES("72","5","AF4","0");
INSERT INTO tbl_spring VALUES("73","6","AF4","0");
INSERT INTO tbl_spring VALUES("74","7","AF4","0");
INSERT INTO tbl_spring VALUES("75","8","AF4","0");
INSERT INTO tbl_spring VALUES("76","9","AF4","0");
INSERT INTO tbl_spring VALUES("77","10","AF4","0");
INSERT INTO tbl_spring VALUES("78","11","AF4","0");
INSERT INTO tbl_spring VALUES("79","12","AF4","0");
INSERT INTO tbl_spring VALUES("80","14","AF4","0");
INSERT INTO tbl_spring VALUES("81","15","AF4","0");
INSERT INTO tbl_spring VALUES("82","16","AF4","0");
INSERT INTO tbl_spring VALUES("83","17","AF4","0");
INSERT INTO tbl_spring VALUES("84","18","AF4","0");
INSERT INTO tbl_spring VALUES("85","19","AF4","0");
INSERT INTO tbl_spring VALUES("86","20","AF4","0");
INSERT INTO tbl_spring VALUES("87","21","AF4","0");
INSERT INTO tbl_spring VALUES("88","22","AF4","0");
INSERT INTO tbl_spring VALUES("89","23","AF4","0");
INSERT INTO tbl_spring VALUES("90","24","AF4","0");
INSERT INTO tbl_spring VALUES("91","1","AF5","0");
INSERT INTO tbl_spring VALUES("92","2","AF5","0");
INSERT INTO tbl_spring VALUES("93","3","AF5","0");
INSERT INTO tbl_spring VALUES("94","5","AF5","0");
INSERT INTO tbl_spring VALUES("95","6","AF5","0");
INSERT INTO tbl_spring VALUES("96","7","AF5","0");
INSERT INTO tbl_spring VALUES("97","8","AF5","0");
INSERT INTO tbl_spring VALUES("98","9","AF5","0");
INSERT INTO tbl_spring VALUES("99","10","AF5","0");
INSERT INTO tbl_spring VALUES("100","11","AF5","0");
INSERT INTO tbl_spring VALUES("101","12","AF5","0");
INSERT INTO tbl_spring VALUES("102","14","AF5","0");
INSERT INTO tbl_spring VALUES("103","15","AF5","0");
INSERT INTO tbl_spring VALUES("104","16","AF5","0");
INSERT INTO tbl_spring VALUES("105","17","AF5","0");
INSERT INTO tbl_spring VALUES("106","18","AF5","0");
INSERT INTO tbl_spring VALUES("107","19","AF5","0");
INSERT INTO tbl_spring VALUES("108","20","AF5","0");
INSERT INTO tbl_spring VALUES("109","21","AF5","0");
INSERT INTO tbl_spring VALUES("110","22","AF5","0");
INSERT INTO tbl_spring VALUES("111","23","AF5","0");
INSERT INTO tbl_spring VALUES("112","24","AF5","0");
INSERT INTO tbl_spring VALUES("113","1","AF6","0");
INSERT INTO tbl_spring VALUES("114","2","AF6","0");
INSERT INTO tbl_spring VALUES("115","3","AF6","0");
INSERT INTO tbl_spring VALUES("116","5","AF6","0");
INSERT INTO tbl_spring VALUES("117","6","AF6","0");
INSERT INTO tbl_spring VALUES("118","7","AF6","0");
INSERT INTO tbl_spring VALUES("119","8","AF6","0");
INSERT INTO tbl_spring VALUES("120","9","AF6","0");
INSERT INTO tbl_spring VALUES("121","10","AF6","0");
INSERT INTO tbl_spring VALUES("122","11","AF6","0");
INSERT INTO tbl_spring VALUES("123","12","AF6","0");
INSERT INTO tbl_spring VALUES("124","1","AF8","0");
INSERT INTO tbl_spring VALUES("125","2","AF8","0");
INSERT INTO tbl_spring VALUES("126","3","AF8","0");
INSERT INTO tbl_spring VALUES("127","5","AF8","0");
INSERT INTO tbl_spring VALUES("128","6","AF8","0");
INSERT INTO tbl_spring VALUES("129","7","AF8","0");
INSERT INTO tbl_spring VALUES("130","8","AF8","0");
INSERT INTO tbl_spring VALUES("131","9","AF8","0");
INSERT INTO tbl_spring VALUES("132","10","AF8","0");
INSERT INTO tbl_spring VALUES("133","11","AF8","0");
INSERT INTO tbl_spring VALUES("134","12","AF8","0");
INSERT INTO tbl_spring VALUES("135","14","AF8","0");
INSERT INTO tbl_spring VALUES("136","15","AF8","0");
INSERT INTO tbl_spring VALUES("137","16","AF8","0");
INSERT INTO tbl_spring VALUES("138","17","AF8","0");
INSERT INTO tbl_spring VALUES("139","1","RA","0");
INSERT INTO tbl_spring VALUES("140","2","RA","0");
INSERT INTO tbl_spring VALUES("141","3","RA","0");
INSERT INTO tbl_spring VALUES("142","5","RA","0");
INSERT INTO tbl_spring VALUES("143","6","RA","0");
INSERT INTO tbl_spring VALUES("144","7","RA","0");
INSERT INTO tbl_spring VALUES("145","8","RA","0");
INSERT INTO tbl_spring VALUES("146","9","RA","0");
INSERT INTO tbl_spring VALUES("147","10","RA","0");
INSERT INTO tbl_spring VALUES("148","11","RA","0");
INSERT INTO tbl_spring VALUES("149","12","RA","0");
INSERT INTO tbl_spring VALUES("150","14","RA","0");
INSERT INTO tbl_spring VALUES("151","15","RA","0");
INSERT INTO tbl_spring VALUES("152","16","RA","0");
INSERT INTO tbl_spring VALUES("153","17","RA","0");
INSERT INTO tbl_spring VALUES("154","18","RA","0");
INSERT INTO tbl_spring VALUES("155","19","RA","0");
INSERT INTO tbl_spring VALUES("156","20","RA","0");
INSERT INTO tbl_spring VALUES("157","21","RA","0");
INSERT INTO tbl_spring VALUES("158","22","RA","0");
INSERT INTO tbl_spring VALUES("159","23","RA","0");
INSERT INTO tbl_spring VALUES("160","24","RA","0");
INSERT INTO tbl_spring VALUES("161","25","RA","0");
INSERT INTO tbl_spring VALUES("162","26","RA","0");
INSERT INTO tbl_spring VALUES("163","27","RA","0");
INSERT INTO tbl_spring VALUES("164","28","RA","0");
INSERT INTO tbl_spring VALUES("165","29","RA","0");
INSERT INTO tbl_spring VALUES("166","30","RA","0");
INSERT INTO tbl_spring VALUES("167","31","RA","0");
INSERT INTO tbl_spring VALUES("168","32","RA","0");
INSERT INTO tbl_spring VALUES("169","33","RA","0");
INSERT INTO tbl_spring VALUES("170","34","RA","0");
INSERT INTO tbl_spring VALUES("171","35","RA","0");
INSERT INTO tbl_spring VALUES("172","36","RA","0");
INSERT INTO tbl_spring VALUES("173","37","RA","0");
INSERT INTO tbl_spring VALUES("174","38","RA","0");
INSERT INTO tbl_spring VALUES("175","39","RA","0");
INSERT INTO tbl_spring VALUES("176","1","AG","0");
INSERT INTO tbl_spring VALUES("177","2","AG","0");
INSERT INTO tbl_spring VALUES("178","3","AG","0");
INSERT INTO tbl_spring VALUES("179","5","AG","0");
INSERT INTO tbl_spring VALUES("180","6","AG","0");
INSERT INTO tbl_spring VALUES("181","7","AG","0");
INSERT INTO tbl_spring VALUES("182","1","AH","0");
INSERT INTO tbl_spring VALUES("183","2","AH","0");
INSERT INTO tbl_spring VALUES("184","3","AH","0");
INSERT INTO tbl_spring VALUES("185","5","AH","0");
INSERT INTO tbl_spring VALUES("186","6","AH","0");
INSERT INTO tbl_spring VALUES("187","7","AH","0");
INSERT INTO tbl_spring VALUES("188","8","AH","0");
INSERT INTO tbl_spring VALUES("189","9","AH","0");
INSERT INTO tbl_spring VALUES("190","10","AH","0");
INSERT INTO tbl_spring VALUES("191","11","AH","0");
INSERT INTO tbl_spring VALUES("192","12","AH","0");
INSERT INTO tbl_spring VALUES("193","14","AH","0");
INSERT INTO tbl_spring VALUES("194","15","AH","0");
INSERT INTO tbl_spring VALUES("195","16","AH","0");
INSERT INTO tbl_spring VALUES("196","17","AH","0");
INSERT INTO tbl_spring VALUES("197","1","AH1","0");
INSERT INTO tbl_spring VALUES("198","2","AH1","0");
INSERT INTO tbl_spring VALUES("199","3","AH1","0");
INSERT INTO tbl_spring VALUES("200","5","AH1","0");
INSERT INTO tbl_spring VALUES("201","6","AH1","0");
INSERT INTO tbl_spring VALUES("202","7","AH1","0");
INSERT INTO tbl_spring VALUES("203","8","AH1","0");
INSERT INTO tbl_spring VALUES("204","9","AH1","0");
INSERT INTO tbl_spring VALUES("205","10","AH1","0");
INSERT INTO tbl_spring VALUES("206","11","AH1","0");
INSERT INTO tbl_spring VALUES("207","12","AH1","0");
INSERT INTO tbl_spring VALUES("208","14","AH1","0");
INSERT INTO tbl_spring VALUES("209","15","AH1","0");
INSERT INTO tbl_spring VALUES("210","16","AH1","0");
INSERT INTO tbl_spring VALUES("211","17","AH1","0");
INSERT INTO tbl_spring VALUES("212","18","AH1","0");
INSERT INTO tbl_spring VALUES("213","19","AH1","0");
INSERT INTO tbl_spring VALUES("214","20","AH1","0");
INSERT INTO tbl_spring VALUES("215","1","AH2","0");
INSERT INTO tbl_spring VALUES("216","2","AH2","0");
INSERT INTO tbl_spring VALUES("217","3","AH2","0");
INSERT INTO tbl_spring VALUES("218","5","AH2","0");
INSERT INTO tbl_spring VALUES("219","6","AH2","0");
INSERT INTO tbl_spring VALUES("220","7","AH2","0");
INSERT INTO tbl_spring VALUES("221","8","AH2","0");
INSERT INTO tbl_spring VALUES("222","9","AH2","0");
INSERT INTO tbl_spring VALUES("223","10","AH2","0");
INSERT INTO tbl_spring VALUES("224","11","AH2","0");
INSERT INTO tbl_spring VALUES("225","12","AH2","0");
INSERT INTO tbl_spring VALUES("226","14","AH2","0");
INSERT INTO tbl_spring VALUES("227","15","AH2","0");
INSERT INTO tbl_spring VALUES("228","16","AH2","0");
INSERT INTO tbl_spring VALUES("229","17","AH2","0");
INSERT INTO tbl_spring VALUES("230","18","AH2","0");
INSERT INTO tbl_spring VALUES("231","19","AH2","0");
INSERT INTO tbl_spring VALUES("232","20","AH2","0");
INSERT INTO tbl_spring VALUES("233","21","AH2","0");
INSERT INTO tbl_spring VALUES("234","22","AH2","0");
INSERT INTO tbl_spring VALUES("235","23","AH2","0");
INSERT INTO tbl_spring VALUES("236","24","AH2","0");
INSERT INTO tbl_spring VALUES("237","25","AH2","0");
INSERT INTO tbl_spring VALUES("238","26","AH2","0");
INSERT INTO tbl_spring VALUES("239","27","AH2","0");
INSERT INTO tbl_spring VALUES("240","28","AH2","0");
INSERT INTO tbl_spring VALUES("241","29","AH2","0");
INSERT INTO tbl_spring VALUES("242","30","AH2","0");
INSERT INTO tbl_spring VALUES("243","31","AH2","0");
INSERT INTO tbl_spring VALUES("244","32","AH2","0");
INSERT INTO tbl_spring VALUES("245","1","AH3","0");
INSERT INTO tbl_spring VALUES("246","2","AH3","0");
INSERT INTO tbl_spring VALUES("247","3","AH3","0");
INSERT INTO tbl_spring VALUES("248","5","AH3","0");
INSERT INTO tbl_spring VALUES("249","6","AH3","0");
INSERT INTO tbl_spring VALUES("250","7","AH3","0");
INSERT INTO tbl_spring VALUES("251","8","AH3","0");
INSERT INTO tbl_spring VALUES("252","9","AH3","0");
INSERT INTO tbl_spring VALUES("253","10","AH3","0");
INSERT INTO tbl_spring VALUES("254","11","AH3","0");
INSERT INTO tbl_spring VALUES("255","12","AH3","0");
INSERT INTO tbl_spring VALUES("256","14","AH3","0");
INSERT INTO tbl_spring VALUES("257","15","AH3","0");
INSERT INTO tbl_spring VALUES("258","16","AH3","0");
INSERT INTO tbl_spring VALUES("259","17","AH3","0");
INSERT INTO tbl_spring VALUES("260","18","AH3","0");
INSERT INTO tbl_spring VALUES("261","19","AH3","0");
INSERT INTO tbl_spring VALUES("262","20","AH3","0");
INSERT INTO tbl_spring VALUES("263","21","AH3","0");
INSERT INTO tbl_spring VALUES("264","22","AH3","0");
INSERT INTO tbl_spring VALUES("265","23","AH3","0");
INSERT INTO tbl_spring VALUES("266","24","AH3","0");
INSERT INTO tbl_spring VALUES("267","25","AH3","0");
INSERT INTO tbl_spring VALUES("268","26","AH3","0");
INSERT INTO tbl_spring VALUES("269","27","AH3","0");
INSERT INTO tbl_spring VALUES("270","28","AH3","0");
INSERT INTO tbl_spring VALUES("271","29","AH3","0");
INSERT INTO tbl_spring VALUES("272","30","AH3","0");
INSERT INTO tbl_spring VALUES("273","1","AH4","0");
INSERT INTO tbl_spring VALUES("274","2","AH4","0");
INSERT INTO tbl_spring VALUES("275","3","AH4","0");
INSERT INTO tbl_spring VALUES("276","5","AH4","0");
INSERT INTO tbl_spring VALUES("277","6","AH4","0");
INSERT INTO tbl_spring VALUES("278","7","AH4","0");
INSERT INTO tbl_spring VALUES("279","8","AH4","0");
INSERT INTO tbl_spring VALUES("280","9","AH4","0");
INSERT INTO tbl_spring VALUES("281","10","AH4","0");
INSERT INTO tbl_spring VALUES("282","11","AH4","0");
INSERT INTO tbl_spring VALUES("283","12","AH4","0");
INSERT INTO tbl_spring VALUES("284","14","AH4","0");
INSERT INTO tbl_spring VALUES("285","15","AH4","0");
INSERT INTO tbl_spring VALUES("286","16","AH4","0");
INSERT INTO tbl_spring VALUES("287","17","AH4","0");
INSERT INTO tbl_spring VALUES("288","18","AH4","0");
INSERT INTO tbl_spring VALUES("289","19","AH4","0");
INSERT INTO tbl_spring VALUES("290","20","AH4","0");
INSERT INTO tbl_spring VALUES("291","21","AH4","0");
INSERT INTO tbl_spring VALUES("292","22","AH4","0");
INSERT INTO tbl_spring VALUES("293","23","AH4","0");
INSERT INTO tbl_spring VALUES("294","24","AH4","0");
INSERT INTO tbl_spring VALUES("295","25","AH4","0");
INSERT INTO tbl_spring VALUES("296","26","AH4","0");
INSERT INTO tbl_spring VALUES("297","27","AH4","0");
INSERT INTO tbl_spring VALUES("298","28","AH4","0");
INSERT INTO tbl_spring VALUES("299","29","AH4","0");
INSERT INTO tbl_spring VALUES("300","30","AH4","0");
INSERT INTO tbl_spring VALUES("301","1","AH5","0");
INSERT INTO tbl_spring VALUES("302","2","AH5","0");
INSERT INTO tbl_spring VALUES("303","3","AH5","0");
INSERT INTO tbl_spring VALUES("304","5","AH5","0");
INSERT INTO tbl_spring VALUES("305","6","AH5","0");
INSERT INTO tbl_spring VALUES("306","7","AH5","0");
INSERT INTO tbl_spring VALUES("307","8","AH5","0");
INSERT INTO tbl_spring VALUES("308","9","AH5","0");
INSERT INTO tbl_spring VALUES("309","10","AH5","0");
INSERT INTO tbl_spring VALUES("310","11","AH5","0");
INSERT INTO tbl_spring VALUES("311","12","AH5","0");
INSERT INTO tbl_spring VALUES("312","14","AH5","0");
INSERT INTO tbl_spring VALUES("313","15","AH5","0");
INSERT INTO tbl_spring VALUES("314","16","AH5","0");
INSERT INTO tbl_spring VALUES("315","17","AH5","0");
INSERT INTO tbl_spring VALUES("316","1","AH6","0");
INSERT INTO tbl_spring VALUES("317","2","AH6","0");
INSERT INTO tbl_spring VALUES("318","3","AH6","0");
INSERT INTO tbl_spring VALUES("319","5","AH6","0");
INSERT INTO tbl_spring VALUES("320","6","AH6","0");
INSERT INTO tbl_spring VALUES("321","7","AH6","0");
INSERT INTO tbl_spring VALUES("322","8","AH6","0");
INSERT INTO tbl_spring VALUES("323","9","AH6","0");
INSERT INTO tbl_spring VALUES("324","10","AH6","0");
INSERT INTO tbl_spring VALUES("325","11","AH6","0");
INSERT INTO tbl_spring VALUES("326","12","AH6","0");
INSERT INTO tbl_spring VALUES("327","14","AH6","0");
INSERT INTO tbl_spring VALUES("328","15","AH6","0");
INSERT INTO tbl_spring VALUES("329","16","AH6","0");
INSERT INTO tbl_spring VALUES("330","1","AH7","0");
INSERT INTO tbl_spring VALUES("331","2","AH7","0");
INSERT INTO tbl_spring VALUES("332","3","AH7","0");
INSERT INTO tbl_spring VALUES("333","5","AH7","0");
INSERT INTO tbl_spring VALUES("334","6","AH7","0");
INSERT INTO tbl_spring VALUES("335","7","AH7","0");
INSERT INTO tbl_spring VALUES("336","8","AH7","0");
INSERT INTO tbl_spring VALUES("337","9","AH7","0");
INSERT INTO tbl_spring VALUES("338","10","AH7","0");
INSERT INTO tbl_spring VALUES("339","11","AH7","0");
INSERT INTO tbl_spring VALUES("340","12","AH7","0");
INSERT INTO tbl_spring VALUES("341","14","AH7","0");
INSERT INTO tbl_spring VALUES("342","15","AH7","0");
INSERT INTO tbl_spring VALUES("343","16","AH7","0");
INSERT INTO tbl_spring VALUES("344","17","AH7","0");
INSERT INTO tbl_spring VALUES("345","18","AH7","0");
INSERT INTO tbl_spring VALUES("346","19","AH7","0");
INSERT INTO tbl_spring VALUES("347","20","AH7","0");
INSERT INTO tbl_spring VALUES("348","21","AH7","0");
INSERT INTO tbl_spring VALUES("349","22","AH7","0");
INSERT INTO tbl_spring VALUES("350","23","AH7","0");
INSERT INTO tbl_spring VALUES("351","24","AH7","0");
INSERT INTO tbl_spring VALUES("352","25","AH7","0");
INSERT INTO tbl_spring VALUES("353","26","AH7","0");
INSERT INTO tbl_spring VALUES("354","27","AH7","0");
INSERT INTO tbl_spring VALUES("355","28","AH7","0");
INSERT INTO tbl_spring VALUES("356","29","AH7","0");
INSERT INTO tbl_spring VALUES("357","30","AH7","0");
INSERT INTO tbl_spring VALUES("358","31","AH7","0");
INSERT INTO tbl_spring VALUES("359","32","AH7","0");
INSERT INTO tbl_spring VALUES("360","1","AH8","0");
INSERT INTO tbl_spring VALUES("361","2","AH8","0");
INSERT INTO tbl_spring VALUES("362","3","AH8","0");
INSERT INTO tbl_spring VALUES("363","5","AH8","0");
INSERT INTO tbl_spring VALUES("364","6","AH8","0");
INSERT INTO tbl_spring VALUES("365","7","AH8","0");
INSERT INTO tbl_spring VALUES("366","8","AH8","0");
INSERT INTO tbl_spring VALUES("367","9","AH8","0");
INSERT INTO tbl_spring VALUES("368","10","AH8","0");
INSERT INTO tbl_spring VALUES("369","11","AH8","0");
INSERT INTO tbl_spring VALUES("370","12","AH8","0");
INSERT INTO tbl_spring VALUES("371","14","AH8","0");
INSERT INTO tbl_spring VALUES("372","15","AH8","0");
INSERT INTO tbl_spring VALUES("373","16","AH8","0");
INSERT INTO tbl_spring VALUES("374","17","AH8","0");
INSERT INTO tbl_spring VALUES("375","18","AH8","0");
INSERT INTO tbl_spring VALUES("376","19","AH8","0");
INSERT INTO tbl_spring VALUES("377","20","AH8","0");
INSERT INTO tbl_spring VALUES("378","21","AH8","0");
INSERT INTO tbl_spring VALUES("379","22","AH8","0");
INSERT INTO tbl_spring VALUES("380","23","AH8","0");
INSERT INTO tbl_spring VALUES("381","24","AH8","0");
INSERT INTO tbl_spring VALUES("382","25","AH8","0");
INSERT INTO tbl_spring VALUES("383","26","AH8","0");
INSERT INTO tbl_spring VALUES("384","27","AH8","0");
INSERT INTO tbl_spring VALUES("385","28","AH8","0");
INSERT INTO tbl_spring VALUES("386","29","AH8","0");
INSERT INTO tbl_spring VALUES("387","30","AH8","0");
INSERT INTO tbl_spring VALUES("388","31","AH8","0");
INSERT INTO tbl_spring VALUES("389","32","AH8","0");
INSERT INTO tbl_spring VALUES("390","1","AH9","0");
INSERT INTO tbl_spring VALUES("391","2","AH9","0");
INSERT INTO tbl_spring VALUES("392","3","AH9","0");
INSERT INTO tbl_spring VALUES("393","5","AH9","0");
INSERT INTO tbl_spring VALUES("394","6","AH9","0");
INSERT INTO tbl_spring VALUES("395","7","AH9","0");
INSERT INTO tbl_spring VALUES("396","8","AH9","0");
INSERT INTO tbl_spring VALUES("397","9","AH9","0");
INSERT INTO tbl_spring VALUES("398","10","AH9","0");
INSERT INTO tbl_spring VALUES("399","11","AH9","0");
INSERT INTO tbl_spring VALUES("400","12","AH9","0");
INSERT INTO tbl_spring VALUES("401","14","AH9","0");
INSERT INTO tbl_spring VALUES("402","15","AH9","0");
INSERT INTO tbl_spring VALUES("403","16","AH9","0");
INSERT INTO tbl_spring VALUES("404","17","AH9","0");
INSERT INTO tbl_spring VALUES("405","18","AH9","0");
INSERT INTO tbl_spring VALUES("406","19","AH9","0");
INSERT INTO tbl_spring VALUES("407","20","AH9","0");
INSERT INTO tbl_spring VALUES("408","21","AH9","0");
INSERT INTO tbl_spring VALUES("409","22","AH9","0");
INSERT INTO tbl_spring VALUES("410","23","AH9","0");
INSERT INTO tbl_spring VALUES("411","24","AH9","0");
INSERT INTO tbl_spring VALUES("412","25","AH9","0");
INSERT INTO tbl_spring VALUES("413","26","AH9","0");
INSERT INTO tbl_spring VALUES("414","27","AH9","0");
INSERT INTO tbl_spring VALUES("415","28","AH9","0");
INSERT INTO tbl_spring VALUES("416","29","AH9","0");
INSERT INTO tbl_spring VALUES("417","30","AH9","0");
INSERT INTO tbl_spring VALUES("418","31","AH9","0");
INSERT INTO tbl_spring VALUES("419","32","AH9","0");
INSERT INTO tbl_spring VALUES("420","33","AH9","0");
INSERT INTO tbl_spring VALUES("421","34","AH9","0");
INSERT INTO tbl_spring VALUES("422","35","AH9","0");
INSERT INTO tbl_spring VALUES("423","36","AH9","0");
INSERT INTO tbl_spring VALUES("424","1","AI","0");
INSERT INTO tbl_spring VALUES("425","2","AI","0");
INSERT INTO tbl_spring VALUES("426","3","AI","0");
INSERT INTO tbl_spring VALUES("427","5","AI","0");
INSERT INTO tbl_spring VALUES("428","6","AI","0");
INSERT INTO tbl_spring VALUES("429","7","AI","0");
INSERT INTO tbl_spring VALUES("430","8","AI","0");
INSERT INTO tbl_spring VALUES("431","9","AI","0");
INSERT INTO tbl_spring VALUES("432","10","AI","0");
INSERT INTO tbl_spring VALUES("433","11","AI","0");
INSERT INTO tbl_spring VALUES("434","1","RB","0");
INSERT INTO tbl_spring VALUES("435","2","RB","0");
INSERT INTO tbl_spring VALUES("436","3","RB","0");
INSERT INTO tbl_spring VALUES("437","5","RB","0");
INSERT INTO tbl_spring VALUES("438","6","RB","0");
INSERT INTO tbl_spring VALUES("439","7","RB","0");
INSERT INTO tbl_spring VALUES("440","8","RB","0");
INSERT INTO tbl_spring VALUES("441","9","RB","0");
INSERT INTO tbl_spring VALUES("442","10","RB","0");
INSERT INTO tbl_spring VALUES("443","11","RB","0");
INSERT INTO tbl_spring VALUES("444","12","RB","0");
INSERT INTO tbl_spring VALUES("445","14","RB","0");
INSERT INTO tbl_spring VALUES("446","15","RB","0");
INSERT INTO tbl_spring VALUES("447","16","RB","0");
INSERT INTO tbl_spring VALUES("448","17","RB","0");
INSERT INTO tbl_spring VALUES("449","18","RB","0");
INSERT INTO tbl_spring VALUES("450","19","RB","0");
INSERT INTO tbl_spring VALUES("451","20","RB","0");
INSERT INTO tbl_spring VALUES("452","21","RB","0");
INSERT INTO tbl_spring VALUES("453","22","RB","0");
INSERT INTO tbl_spring VALUES("454","23","RB","0");
INSERT INTO tbl_spring VALUES("455","24","RB","0");
INSERT INTO tbl_spring VALUES("456","25","RB","0");
INSERT INTO tbl_spring VALUES("457","26","RB","0");
INSERT INTO tbl_spring VALUES("458","27","RB","0");
INSERT INTO tbl_spring VALUES("459","28","RB","0");
INSERT INTO tbl_spring VALUES("460","29","RB","0");
INSERT INTO tbl_spring VALUES("461","30","RB","0");
INSERT INTO tbl_spring VALUES("462","31","RB","0");
INSERT INTO tbl_spring VALUES("463","32","RB","0");
INSERT INTO tbl_spring VALUES("464","33","RB","0");
INSERT INTO tbl_spring VALUES("465","34","RB","0");
INSERT INTO tbl_spring VALUES("466","35","RB","0");
INSERT INTO tbl_spring VALUES("467","36","RB","0");
INSERT INTO tbl_spring VALUES("468","37","RB","0");
INSERT INTO tbl_spring VALUES("469","38","RB","0");
INSERT INTO tbl_spring VALUES("470","39","RB","0");



DROP TABLE tbl_status_keterangan_presensi;

CREATE TABLE `tbl_status_keterangan_presensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_presensi` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `status_manager` int(2) NOT NULL,
  `status_gm` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO tbl_status_keterangan_presensi VALUES("1","1","9","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("2","1","10","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("3","1","10003","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("4","1","10004","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("5","1","10008","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("6","1","10009","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("7","1","6","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("8","1","10010","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("9","1","10011","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("10","1","10012","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("11","1","10013","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("12","1","10015","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("13","1","10025","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("14","1","10153","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("15","1","10027","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("16","1","10169","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("17","1","10082","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("18","1","10083","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("19","1","10034","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("20","1","10037","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("21","1","10038","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("22","1","10039","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("23","1","10040","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("24","1","10041","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("25","1","10044","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("26","1","10049","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("27","1","10050","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("28","1","10060","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("29","1","10062","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("30","1","10064","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("31","1","10065","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("32","1","10070","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("33","1","4","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("34","1","10072","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("35","1","10073","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("36","1","10074","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("37","1","10076","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("38","1","2","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("39","1","10075","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("40","1","10081","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("41","1","10023","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("42","1","10092","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("43","1","10091","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("44","1","10098","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("45","1","10093","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("46","1","10095","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("47","1","10094","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("48","1","10100","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("49","1","10159","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("50","1","10150","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("51","1","10161","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("52","1","10101","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("53","1","10166","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("54","1","10149","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("55","1","10151","1","1");
INSERT INTO tbl_status_keterangan_presensi VALUES("56","1","0","0","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("57","1","10184","1","0");
INSERT INTO tbl_status_keterangan_presensi VALUES("58","1","10186","0","0");



DROP TABLE tbl_sub_unit;

CREATE TABLE `tbl_sub_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_unit` varchar(255) DEFAULT NULL,
  `kode_unit` int(20) DEFAULT NULL,
  `kode_sub` int(25) DEFAULT NULL,
  `kode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_unit` (`kode_unit`),
  KEY `sub_unit` (`sub_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

INSERT INTO tbl_sub_unit VALUES("0","Office","0","1","0");
INSERT INTO tbl_sub_unit VALUES("1","Office Direksi","1","1","1");
INSERT INTO tbl_sub_unit VALUES("2","DEPARTEMEN MARKETING & SALES","2","2","2");
INSERT INTO tbl_sub_unit VALUES("3","SEKSI MARKETING","2","3","3");
INSERT INTO tbl_sub_unit VALUES("4","SEKSI SALES & FORCE","2","4","4");
INSERT INTO tbl_sub_unit VALUES("5","SEKSI ASSET MANAGEMENT","2","5","5");
INSERT INTO tbl_sub_unit VALUES("6","DEPARTEMENT BUSINESS DEVELOPMENT","3","6","6");
INSERT INTO tbl_sub_unit VALUES("7","SEKSI PROPERTY DEVELOPMENT","3","7","7");
INSERT INTO tbl_sub_unit VALUES("8","SEKSI RELATED BUSINESS DEVELOPMENT","3","8","8");
INSERT INTO tbl_sub_unit VALUES("9","SEKSI LAND AND PERMIT","3","9","9");
INSERT INTO tbl_sub_unit VALUES("10","DEPARTEMEN ENGINEERING","4","10","10");
INSERT INTO tbl_sub_unit VALUES("11","SEKSI PROPERTY ENGINEERING & MAINTENANCE","4","11","11");
INSERT INTO tbl_sub_unit VALUES("12","SEKSI BUSINESS ENGINEERING & MAINTENANCE","4","12","12");
INSERT INTO tbl_sub_unit VALUES("13","PROJECT RESIDENCE SAWANGAN DAN KAUMSARI","5","13","13");
INSERT INTO tbl_sub_unit VALUES("14","PROJECT SPRING RESIDENCE SIDOARJO","5","13","14");
INSERT INTO tbl_sub_unit VALUES("15","PROJECT ROYAL PANDAAN","5","13","15");
INSERT INTO tbl_sub_unit VALUES("16","PROJECT OFFICE ONE","5","13","16");
INSERT INTO tbl_sub_unit VALUES("17","KM 407 A","6","13","17");
INSERT INTO tbl_sub_unit VALUES("18","KM 418 B","6","13","18");
INSERT INTO tbl_sub_unit VALUES("19","KM 420 A","6","13","19");
INSERT INTO tbl_sub_unit VALUES("20","KM 519 A","7","13","20");
INSERT INTO tbl_sub_unit VALUES("21","KM 519 B","7","13","21");
INSERT INTO tbl_sub_unit VALUES("22","KM 538 A","7","13","22");
INSERT INTO tbl_sub_unit VALUES("23","KM 538 B","7","13","23");
INSERT INTO tbl_sub_unit VALUES("24","KM 575 A","7","13","24");
INSERT INTO tbl_sub_unit VALUES("25","KM 575 B","7","13","25");
INSERT INTO tbl_sub_unit VALUES("26","KM 597 A","8","13","26");
INSERT INTO tbl_sub_unit VALUES("27","KM 597 B","8","13","27");
INSERT INTO tbl_sub_unit VALUES("28","KM 64 A","9","13","28");
INSERT INTO tbl_sub_unit VALUES("29","KM 64 B","9","13","29");
INSERT INTO tbl_sub_unit VALUES("30","DEPARTEMEN RELATED BUSINESS OPERATION","10","14","30");
INSERT INTO tbl_sub_unit VALUES("31","SEKSI UTILITIES & ADVERTISING","10","15","31");
INSERT INTO tbl_sub_unit VALUES("32","SEKSI AREA CONTROL","10","16","32");
INSERT INTO tbl_sub_unit VALUES("33","KM 88 A","11","17","33");
INSERT INTO tbl_sub_unit VALUES("34","KM 88 B","11","17","34");
INSERT INTO tbl_sub_unit VALUES("35","KM 407 A","13","17","35");
INSERT INTO tbl_sub_unit VALUES("36","KM 418 B","13","17","36");
INSERT INTO tbl_sub_unit VALUES("37","KM 420 A","13","17","37");
INSERT INTO tbl_sub_unit VALUES("38","KM 519 A","14","17","38");
INSERT INTO tbl_sub_unit VALUES("39","KM 519 B","14","17","39");
INSERT INTO tbl_sub_unit VALUES("40","KM 538 A","14","17","40");
INSERT INTO tbl_sub_unit VALUES("41","KM 538 B","14","17","41");
INSERT INTO tbl_sub_unit VALUES("42","KM 575 A","14","17","42");
INSERT INTO tbl_sub_unit VALUES("43","KM 575 B","14","17","43");
INSERT INTO tbl_sub_unit VALUES("44","KM 597 A","15","17","44");
INSERT INTO tbl_sub_unit VALUES("45","KM 597 B","15","17","45");
INSERT INTO tbl_sub_unit VALUES("46","KM 64 A","16","17","46");
INSERT INTO tbl_sub_unit VALUES("47","KM 64 B","16","17","47");
INSERT INTO tbl_sub_unit VALUES("48","KM 207 A","12","17","48");
INSERT INTO tbl_sub_unit VALUES("49","KM 725 A","17","17","49");
INSERT INTO tbl_sub_unit VALUES("50","DEPARTEMEN FINANCE & ACCOUNTING","18","18","50");
INSERT INTO tbl_sub_unit VALUES("51","SEKSI FINANCE & BUDGETING","18","19","51");
INSERT INTO tbl_sub_unit VALUES("52","SEKSI TREASURY","18","20","52");
INSERT INTO tbl_sub_unit VALUES("53","SEKSI ACCOUNTING & TAX","18","21","53");
INSERT INTO tbl_sub_unit VALUES("54","DEPARTEMENT HR & GENERAL AFFAIR","19","22","54");
INSERT INTO tbl_sub_unit VALUES("55","SEKSI HR & GENERAL AFFAIR","19","23","55");
INSERT INTO tbl_sub_unit VALUES("56","SEKSI LEGAL & COMPLAINCE","19","24","56");
INSERT INTO tbl_sub_unit VALUES("57","SEKSI INFORMATION TECHNOLOGY","19","25","57");
INSERT INTO tbl_sub_unit VALUES("58","SEKSI PROPERTY PLANNING","3","26","0");
INSERT INTO tbl_sub_unit VALUES("59","GEDUNG GRAHA SIMATUPANG","2","27","0");
INSERT INTO tbl_sub_unit VALUES("60","KM 7 A","20","28","0");
INSERT INTO tbl_sub_unit VALUES("61","KM 7 B","20","0","0");
INSERT INTO tbl_sub_unit VALUES("62","KM 26 A","20","29","0");
INSERT INTO tbl_sub_unit VALUES("63","KM 26 B","20","30","0");
INSERT INTO tbl_sub_unit VALUES("64","KM 67 A","21","31","0");
INSERT INTO tbl_sub_unit VALUES("65","KM 67 B","21","32","0");
INSERT INTO tbl_sub_unit VALUES("66","KM 26 A","22","33","0");
INSERT INTO tbl_sub_unit VALUES("67","KM 26 B","22","34","0");
INSERT INTO tbl_sub_unit VALUES("68","SEKSI MANAGER REST AREA","10","","0");
INSERT INTO tbl_sub_unit VALUES("70","DEPARTEMEN UTILITAS DAN IKLAN","24","","0");
INSERT INTO tbl_sub_unit VALUES("71","WILAYAH JAWA TENGAH","25","","0");
INSERT INTO tbl_sub_unit VALUES("72","WILAYAH JAWA BARAT","25","","0");
INSERT INTO tbl_sub_unit VALUES("73","WILAYAH JAWA TIMUR","25","","0");
INSERT INTO tbl_sub_unit VALUES("74","WILAYAH LUAR JAWA","25","","0");
INSERT INTO tbl_sub_unit VALUES("75","REGIONAL TIP / TI","25","","0");
INSERT INTO tbl_sub_unit VALUES("76","DEPARTEMEN ENGINEERING RELATED BUSINESS","26","","0");
INSERT INTO tbl_sub_unit VALUES("77","DEPARTEMEN KEUANGAN DAN SDMU RELATED BUSINESS","27","","0");



DROP TABLE tbl_surat_keluar;

CREATE TABLE `tbl_surat_keluar` (
  `id_surat` int(10) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(255) NOT NULL,
  `asal_surat` varchar(255) DEFAULT NULL,
  `tujuan` varchar(250) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `kode` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_catat` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` bigint(255) NOT NULL,
  `dari` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `bzzcb` (`id_user`),
  CONSTRAINT `bzzcb` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_surat_masuk;

CREATE TABLE `tbl_surat_masuk` (
  `id_surat` int(10) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(255) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `asal_surat` varchar(250) NOT NULL,
  `isi` mediumtext NOT NULL,
  `indeks` varchar(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_user` bigint(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `baca` int(2) NOT NULL,
  `sifat` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `fqwet` (`id_user`),
  CONSTRAINT `fqwet` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `id_user` bigint(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `tujuan` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `sub_unit` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status_karyawan` int(5) NOT NULL,
  `cuti` int(255) NOT NULL,
  `divisi` int(25) NOT NULL,
  `harikontrak` varchar(255) NOT NULL,
  `status_aktif` int(2) NOT NULL,
  `score` int(11) NOT NULL,
  `waktugame` varchar(255) NOT NULL,
  `status_tugas` int(2) NOT NULL,
  `kelas_jabatan` int(25) NOT NULL,
  `jmrb` int(25) NOT NULL,
  `last_log` varchar(255) NOT NULL,
  `gmail` longtext NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `nama` (`nama`),
  KEY `fff` (`admin`),
  KEY `unit` (`unit`),
  CONSTRAINT `fsa` FOREIGN KEY (`admin`) REFERENCES `tbl_role` (`admin`)
) ENGINE=InnoDB AUTO_INCREMENT=10189 DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("1","sdm","13bb8b589473803f26a02e338f949b8c","Admin SDM - Umum","-","1","0","","19","","","4","0","2","","1","0","3600","2","0","0","04 Jan 2019 16:26:09","");
INSERT INTO tbl_user VALUES("2","PK068","556f17c2cd7d50470fd0cb03588a10da","Aprillia Hermansyah","PK068","7","0","6422-april.jpg","4","10","47","5","0","4","","1","0","3600","2","9","0","02 Jan 2019 09:05:23","");
INSERT INTO tbl_user VALUES("4","PK060","d69ed7e8520a6ee31d5ab1d597726f34","Dendito Pratama","PK060","7","0","1167-dendito.jpg","19","57","123","5","8","2","","1","0","3600","2","9","0","12 Jan 2019 00:03:09","107915472535905905447");
INSERT INTO tbl_user VALUES("6","10022","93a27b0bd99bac3e68a440b48aa421ab","Sumarsono","10022","4","0","3032-ono.jpg","19","54","106","3","10","2","","1","0","3600","1","4","0","11 Jan 2019 23:40:03","");
INSERT INTO tbl_user VALUES("7","10001","52d5c97cf60257405716d84b9a885d31","Hubby Ramdhani","10001","4","0","8578-Hubby.jpg","10","30","75","3","12","7","","1","0","3600","1","4","1","","");
INSERT INTO tbl_user VALUES("8","admin","d69ed7e8520a6ee31d5ab1d597726f34","Super Admin","-","1","0","5911-Logo Master JMP video.jpg","0","","BANG ADMIN","0","999997","2","","1","55","3600","0","0","0","12 Jan 2019 19:40:18","100668005486913410963");
INSERT INTO tbl_user VALUES("9","10003","f5dffc111454b227fbcdf36178dfe6ac","Uci Sanusi","10003","5","0","2493-uci.jpg","18","52","98","3","12","3","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10","10007","9cdf26568d166bc6793ef8da5afa0846","R.A. Ayu Suzanne P","10007","5","0","2770-ayu.jpg","4","11","49","3","12","4","","1","0","3600","2","7","0","","");
INSERT INTO tbl_user VALUES("9999","tampung","tampung","-","tampung","1","0","","0","","","0","0","0","","0","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10001","10010","4bc457f7b180362dfb1ae8b0a3da32a7","Irwansyah Rinaldhi","10010","5","0","7717-WhatsApp Image 2018-12-10 at 21.29.30.jpeg","14","38","87","3","12","7","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10002","10011","a2369958a9645eac52b58a8134e2ef5a","Dede Ahmad Nurhadi","10011","5","0","2940-dede.jpg","13","36","147","3","12","7","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10003","10014","7b9d31aa17b849b238ab79cef0733041","Meta Herlina Puspitaningtyas","10014","4","0","155-Meta H.jpg","3","6","32","3","12","5","","1","0","3600","1","4","0","07 Jan 2019 10:10:29","");
INSERT INTO tbl_user VALUES("10004","10015","342b5fe6486788799659c39bbfc3fa02","Marlina Ririn Indriyani","10015","5","0","8201-liena.jpg","2","3","10","3","12","6","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10005","10016","1ce9168a60deae4a994dbd5b2d145699","Engkun Purkonudin","10016","5","0","7464-engkun.jpg","11","33","87","3","12","7","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10006","10017","24064e6576a74af1b8eda89277c6b659","Sri Rejeki Handayani","10017","4","0","","18","50","95","3","5","3","","0","0","3600","1","4","0","","");
INSERT INTO tbl_user VALUES("10007","10019","fd32b50714854403e9e1001a44becc65","Hanna Farida Tampubolon","10019","5","0","8427-hanna.jpg","10","32","83","3","12","7","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10008","10020","c1722a7941d61aad6e651a35b65a9c3e","Donny Ikhwan","10020","4","0","5784-donny.jpg","4","10","46","3","12","4","","1","0","3600","1","4","0","","");
INSERT INTO tbl_user VALUES("10009","10021","f702defbc67edb455949f46babab0c18","Roni Wijaya","10021","6","0","6013-cakroni.jpg","2","3","12","3","12","6","","1","0","3600","1","8","0","07 Jan 2019 10:10:09","");
INSERT INTO tbl_user VALUES("10010","10023","7b8bc3700ce886e8627f41e799fe764f","Imad Zaky Mubarak","10023","4","0","8515-zaky.jpg","2","2","8","3","12","6","","1","0","3600","1","4","0","07 Jan 2019 10:10:18","");
INSERT INTO tbl_user VALUES("10011","10025","76d0baca6075c45cd8a3a55fa6a23c05","Tria Oktaviani","10025","5","0","6110-tria.jpg","4","11","48","3","12","4","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10012","10027","3882c5a9869d86def6b7be879605522e","Sumarmi","10027","5","0","5295-sumarmi.jpg","19","55","108","3","12","2","3","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10013","10029","827051e35b2c76f7004a6cbc76f42d4a","Edmundus Edy Pancaningtyas","10029","6","0","6744-edmundus.jpg","19","55","111","3","12","2","","1","0","3600","1","8","0","","");
INSERT INTO tbl_user VALUES("10014","10030","b42f87724dee54c6fc1ccf14a0e536d4","Irwan Zaini Luthfi","10030","5","0","7475-Irwan ZL.jpg","13","35","147","3","12","7","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10015","10031","d2cb583f4b5bdc51b965ae555ee6bca5","Katni","10031","6","0","8673-katni.jpg","18","52","77","3","12","3","","1","0","3600","1","8","0","","");
INSERT INTO tbl_user VALUES("10016","10032","6aeb68d1bdff2c5e503eed93c51dd74d","Muhamad Agus Sunardi","10032","7","0","8598-Agus.jpg","14","39","156","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10017","10033","b4dda6951b6af2e9d06224a597eac5fe","Setya Prayitno","10033","7","0","8152-setya.jpg","14","42","156","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10018","10034","dbc6904b9ae5239ad74f90306daae0ad","Bagus Sugiharto","10034","7","0","7915-IMG-20181211-WA0034.jpg","8","26","164","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10019","10035","329d1ea6acb272924f991d523b2d2b80","Karmin","10035","7","0","","8","27","148","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10020","10036","7c127e0c66f06e58c7c7310a7c6fa488","Rudi tatang","10036","7","0","","13","37","148","5","0","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10021","10037","c38f0ea6e6c3aa84b9f662bb03673c97","Sandy Irawan","10037","7","0","3124-IMG20181128095424.jpg","14","43","156","5","0","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10022","10038","0f6b1f657ac30ab76519ed4c677e9909","Irwan Pahala Simanungkalit","10038","7","0","","17","49","180","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10023","10039","2a8009525763356ad5e3bb48b7475b4d","Ade Gustika","10039","5","0","","3","58","186","3","12","5","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10024","10040","f250daff6a09865ff432821b2adac54f","Mintari Yulianingsih","10040","4","0","","24","70","190","3","12","7","","1","0","3600","1","4","1","","");
INSERT INTO tbl_user VALUES("10025","D0005","fed2bb44e5db4d3b34370d2ed061fbbd","Irwan Artigyo Sumadiyo","D0005","2","0","3093-irwan.jpg","1","1","4","2","12","1","","1","0","3600","2","2","0","08 Jan 2019 17:29:58","");
INSERT INTO tbl_user VALUES("10027","PK102","04e246e949e3a9b2b80c4d7d3bef872d","Herdwin Nofrian","PK102","5","0","5473-ewin.jpg","18","53","101","5","12","3","","1","0","3600","2","6","0","","");
INSERT INTO tbl_user VALUES("10031","PK016","04ce83bf1967d561285890241abf11eb","Handa Rudita","PK016","5","0","3204-handa.jpg","3","9","41","5","12","5","","1","0","3600","2","6","1","","");
INSERT INTO tbl_user VALUES("10032","PK018","e8e68213a17dbac1bc8736e68af7732c","Mia Restu Oktavia Sutanty","PK018","8","0","7777-mia.jpg","12","48","129","5","12","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10033","PK019","cd86235826c87663d03da08dda19b5af","Rafika Afrianne Ichsan","PK019","8","0","1774-fika.jpg","12","48","128","5","12","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10034","PK020","a349c90fb067eae78defd650c86e942e","Ibnu Sarjono","PK020","7","0","8448-ibnu.jpg","5","16","71","5","12","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10035","PK021","942e07c72a2f12ef5368b7dfd5c53116","Salmadi","PK021","7","0","7847-salmadi.jpg","12","48","131","5","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10036","PK022","0ac70a7ae64fce4225dcca0debaf939a","Julian Dwi Kusuma Lestari","PK022","8","0","9621-pas foto.jpg","12","48","132","5","12","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10037","PK023","ff06415acd8ad03505030f2baac4607c","Widyadji Sasono","PK023","6","0","4368-loudy.jpg","18","51","97","5","12","3","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10038","PK024","59332b589a064382226ec34492419cba","Riyen Haryani","PK024","8","0","298-riyen.jpg","2","3","30","5","12","6","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10039","PK025","29bff3632b1337102fd98773e64bfc36","Risma Nurjannah","PK025","8","0","6824-risma.jpg","19","55","116","5","12","7","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10040","PK027","dced105c62a12c5b94280160612ad040","Gatri Ayuning Lestari","PK027","6","0","5588-gatri.jpg","18","53","102","5","12","3","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10041","PK028","bfb3852b4814d2e61598f2ad07d46298","Kevin Dwiagy Emerald","PK028","8","0","6146-kevin.jpg","19","57","124","5","12","2","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10042","PK029","594eee4c191bc382c7e3c749a3444b8a","Isna Rifai","PK029","6","0","4689-IMG_20181128_122928.jpg","5","15","67","5","12","7","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10043","PK030","73b4c1b7b7ddaf5ae9850b114b6bf558","Resy Alifiyanti Suprapto","PK030","8","0","1616-resy.jpg","5","14","116","5","12","2","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10044","PK031","3168f142ce3904a787b2ab3f68ae5968","Abdurrahman","PK031","6","0","5645-rahman.jpg","4","12","49","5","12","4","","1","0","3600","2","8","0","02 Jan 2019 09:04:39","");
INSERT INTO tbl_user VALUES("10045","PK032","3384d017ec0e7f0f17d2c3d18b608c24","Muhammad Fahri","PK032","6","0","7468-fahri.jpg","6","18","67","5","12","4","","1","0","3600","2","8","1","","");
INSERT INTO tbl_user VALUES("10046","PK033","14c96390890cda796ba8a0100f647a4f","Saipul Anwar","PK033","8","0","","11","33","91","5","12","5","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10047","PK034","1872f655b7c18c6774a606268f9e8397","Muhamad Nur Baedi","PK034","8","0","4062-WhatsApp Image 2018-12-13 at 15.52.26.jpeg","12","48","130","5","12","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10048","PK035","57bf2d8dc369f5238ad508888f101ef9","Reza Ahmad Fauzi","PK035","7","0","6421-rezaahmad.jpg","5","13","71","5","12","5","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10049","PK036","7cc3666509e65e7209d2517003c984d9","Siti Rosmayanti","PK036","8","0","9550-rosma.jpg","2","3","29","5","12","6","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10050","PK037","5eb0614e5a420717938116ce87e358fd","Maylisa Marsita Anggreina Siahaya","PK037","8","0","3452-ica.jpg","2","3","20","5","12","6","","1","0","3600","2","10","0","07 Jan 2019 10:10:57","");
INSERT INTO tbl_user VALUES("10051","PK038","beb1c0c148f8a01a9b7a19e4f7d009c1","Adhi Sujana","PK038","5","0","2234-adhi.jpg","11","33","87","5","12","7","","1","0","3600","2","6","1","","");
INSERT INTO tbl_user VALUES("10052","PK039","679247a792c1a50731ba8f48425e58ed","Eko Prabowo","PK039","8","0","","7","20","72","5","12","5","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10053","PK040","c2797a8ce242cb02cd045f49b1754740","Edi Junaedi","PK040","6","0","9496-edi.jpg","6","18","67","5","12","4","","1","0","3600","2","8","1","","");
INSERT INTO tbl_user VALUES("10054","PK041","e900266bd33ff5bbf04c76871467509a","Lucyanna Nilasary","PK041","6","0","","19","56","121","5","0","1","","0","0","3600","0","8","0","","");
INSERT INTO tbl_user VALUES("10055","PK043","e9f7574dc8aa752126443c5d3b2bf509","Agus Setyawan","PK043","6","0","3902-FOTO.jpeg","7","20","67","5","12","5","","1","0","3600","2","8","1","","");
INSERT INTO tbl_user VALUES("10056","PK044","e8c3701613c6192f5578534912bc410f","Hendry","PK044","6","0","8563-hendry.jpg","6","18","67","5","12","4","","1","0","3600","2","8","1","","");
INSERT INTO tbl_user VALUES("10057","PK045","0e0f18e07ffc9e2d40ac8e0f2d3246fd","Andi Rusdiana","PK045","5","0","2909-andirus.jpg","5","15","62","5","12","4","","1","0","3600","2","6","1","","");
INSERT INTO tbl_user VALUES("10058","PK046","fdf1adf0071c444ec897f638453f5d67","Rizal Kamaruzzaman","PK046","6","0","5830-WhatsApp Image 2018-12-15 at 10.03.10.jpeg","4","11","67","5","12","4","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10059","PK047","00ea5c35f3381114e4471f36b26998e1","Mustofa","PK047","5","0","","6","17","62","5","12","4","","1","0","3600","2","6","1","","");
INSERT INTO tbl_user VALUES("10060","PK048","064fa76b894021616335263a1c7fe7f2","Dian Ika Ningrum","PK048","6","0","9022-didi.jpg","19","55","110","5","12","2","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10061","PK049","6ff9c235860eb08d0fb2af6e5751c51a","Sofi Ratna Furi","PK049","7","0","463-sofi.jpg","10","68","187","5","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10062","PK050","343979a6222fcf5c4f50a8fd4ce710d1","Adya Kemara","PK050","6","0","","2","59","27","5","12","6","","1","0","3600","2","8","0","02 Jan 2019 09:05:01","");
INSERT INTO tbl_user VALUES("10063","PK051","c579bd5d9a445f646be67f38a3547b78","Rizalulloh","PK051","5","0","3163-rizalullah.jpg","5","13","62","5","12","4","","1","0","3600","2","6","1","","");
INSERT INTO tbl_user VALUES("10064","PK052","64eb6f33d79221581bfe7df31d065889","Ardo Yudha Barnesa","PK052","7","0","8086-ardo.jpg","3","6","36","5","12","5","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10065","PK053","2e1e200308d8c68e3d75bf9a079003f6","Melly Febriyanti","PK053","7","0","2881-melly.jpg","2","3","15","5","12","6","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10066","PK054","9276d8c623b5f0930f93cf07fae0845f","Angga Saputra","PK054","6","0","","2","3","63","5","0","1","","0","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10067","PK055","69d932de20a7f913c654a9e87a1e814d","Ayu Ratnasari","PK055","8","0","","5","14","66","5","0","5","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10068","PK056","39622b96050721a046d2b04977b2e9b7","Dicky Wahyu Pratama","PK056","8","0","5176-22815122_814469842058608_1534603846351866508_n.jpg","11","33","89","5","0","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10069","PK057","ae5318388db0dae818a4ddefd1560130","Muhamad Rizki Cahyadi","PK057","7","0","3509-iki.jpg","5","14","64","5","0","6","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10070","PK059","f5264fb5dd9e7a5f0625ead4cf99748a","Bimo Firizki Diadi","PK059","7","0","4776-bimo.jpg","4","11","54","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10071","PK061","bbf6eb76300e11c07204fcb6b37c592f","Bayu Budi Utomo","PK061","7","0","","7","20","68","5","12","4","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10072","PK062","4af94e2228b66f54061c29cd57f1ef9e","Nur Asty Pratiwi","PK062","7","0","7579-asty.jpg","4","11","50","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10073","PK063","aea7634c3ec2f35111a39f83e50b9d4b","Sholahuddin Triwidinata","PK063","7","0","4759-soleh.jpg","5","13","68","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10074","PK064","0310be8ba79e4380d9807fc0e56e7cc1","Bukry Chamma Siburian","PK064","7","0","3158-bukry.jpg","4","11","57","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10075","PK065","b67923e5a6170f34c52e19086ea1aeed","Rizki Ehsy Pangarso","PK065","7","0","7580-kiki.jpg","2","3","17","5","0","6","","1","2","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10076","PK066","54a9676df022c0b88a9b43bba829add2","Latifah","PK066","7","0","1168-pas.png","2","3","17","5","0","1","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10077","PK067","3046f57a2a27fdd1edece2fbb3c9ffae","Ramdani Adam","PK067","7","0","","10","68","82","5","0","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10078","PK069","a59eeaf48b22ebf1fee0b715731dc7ca","Arsindiany Alambago","PK069","6","0","","18","51","97","5","0","3","","0","0","3600","0","8","0","","");
INSERT INTO tbl_user VALUES("10079","PK070","dc8734f7a1b8c973d64b78ca4d0b1121","Wega Tommy Dwi Pamungkas","PK070","8","0","8165-IMG-20181211-WA0015.jpg","15","44","72","5","0","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10080","PK071","ab47cbbc8714426e14ac62e2b8a8e81d","Nur Fitriyah Febriana","PK071","8","0","1071-1537965857749.jpg","5","14","65","5","0","6","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10081","PK072","6b62c56b6c78e81e262fc435b158f880","Mohamad Reza Pahlevi","PK072","7","0","2278-rezap.jpg","18","53","103","5","0","3","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10082","PK073","a76982be20687afd6e3b55b5c2b75c63","Vishnu Damar Sasongko","PK073","5","0","7259-vishnu.jpg","18","51","96","5","12","3","","1","0","3600","2","6","0","","");
INSERT INTO tbl_user VALUES("10083","PK074","731b2949bd21b228de95f6750ff35e70","G. Heryawan Indrayatna","PK074","5","0","9899-indra.jpg","2","5","25","5","12","1","","1","0","3600","2","6","0","","");
INSERT INTO tbl_user VALUES("10084","PK075","0f533944d5c73e05c49c8d4c4cca2196","Ario Seto","PK075","7","0","3461-IMG-20181209-WA0006.jpg","15","44","70","5","12","3","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10085","PK076","856adc13bd0c5999ed10315e300e76e3","Andi Afriansyah","PK076","8","0","","10","30","78","5","12","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10086","PK077","b5d757bf5b47ab148a9fcb8fcf0ce365","Lowig Caesar S.","PK077","5","0","7968-IMG_20181213_112231.jpg","8","26","62","5","0","4","","1","0","3600","2","6","1","","");
INSERT INTO tbl_user VALUES("10087","PK078","24cbad67a9545c21b12b86ad024906e1","Arif Rahman","PK078","6","0","7301-IMG-20181208-WA0012.jpg","8","26","67","5","0","7","","1","0","3600","2","8","1","","");
INSERT INTO tbl_user VALUES("10088","PK079","4d81e61f13169060aaef7103749b888a","Antonius Catur Satriono","PK079","6","0","","6","17","67","5","12","7","","1","0","3600","2","8","1","","");
INSERT INTO tbl_user VALUES("10089","PK080","c11a2864e145cb5f0ec4ae89b12e390f","Agus Triwahyudi","PK080","7","0","","5","15","68","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10090","PK083","2b1a48519736b7da7d581e9647443f09","Robi Nugraha","PK083","7","0","1756-2018-06-10 08.36.51 3.jpg","10","32","85","5","0","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10091","PK084","3cfab66abaf1adf0e948a6e53c599410","Tania Intan Sari","PK084","8","0","4060-tania.jpg","4","10","47","5","0","4","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10092","10041","6d38b80c1da3bd9d8717ce47fea2acd7","Kristiana Live Sonya","10041","6","0","4433-kristin.jpg","2","3","26","3","12","6","","1","0","3600","1","8","0","","");
INSERT INTO tbl_user VALUES("10093","10042","425f116bf53f051c57d1670a04fb4a0c","Slamet Purwanto","10042","5","0","9599-slamet.jpg","19","57","122","3","12","2","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10094","10043","15f937f0a5598016008f107d8cbdf0a2","Indri Kurnia Lestari","10043","5","0","7518-foto indri kurnia.jpeg","3","7","34","3","12","5","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10095","10044","9c16b0e83f09596202f402261f25c8a9","Tisa Yuanita","10044","5","0","","2","4","18","3","12","6","","1","0","3600","1","6","0","","");
INSERT INTO tbl_user VALUES("10096","10045","997e65474a248252883b485717f7d098","Evil Ramadhani","10045","5","0","","4","12","55","3","12","4","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10097","PK087","a3fb120d1e9c2d67aabe358cf47eb1df","Muhammad Rizaq Nuriz Zaman","PK087","8","0","959-Muhammad-Rizaq-Nuriz-Zaman.jpg","7","20","157","5","0","5","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10098","PK086","f256f296f10bde8e132f22fd463862bd","Syamsul Fadly","PK086","7","0","4054-syamsul.jpg","4","12","59","5","0","4","","1","0","3600","2","9","0","02 Jan 2019 09:27:44","");
INSERT INTO tbl_user VALUES("10099","PK085","34b4f080b684b4105983b5c7d0ca04a0","Bayuaji Prabowo Nugroho","PK085","7","0","939-bayuaj.jpg","5","14","73","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10100","PK095","ed3230f53e8c255c8d2a29c3e04a559f","Sabila Adinda Puri Andarini","PK095","8","0","","19","55","115","5","0","2","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10101","10047","eccd9f7dc92858b741132fda313130cf","Yati Melasari","10047","5","0","7884-mela.jpg","19","55","109","3","12","2","","1","0","3600","1","7","0","","");
INSERT INTO tbl_user VALUES("10102","10052","d6f8d124087ad4c23fe66b89b7893523","Arief Hartono","10052","7","0","","12","48","127","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10103","10054","bef4d169d8bddd17d68303877a3ea945","Yayang Supiyar","10054","7","0","","12","48","127","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10104","10053","7fbfc161a3b873bf2119c788ed93d1f4","Ujang","10053","7","0","1210-2311-ktp_ujang.jpg","12","48","127","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10105","10055","e4191d610537305de1d294adb121b513","Rd Mochamad Erwin Siswanto","10055","7","0","292-IMG-20181213-WA0175[1].jpg","12","48","127","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10106","10056","7d74f0aa3521a78533a8e8d6a6b5b8a1","Deddy Khoirul Anam","10056","7","0","1900-IMG-20180824-WA0008.jpg","17","49","180","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10107","10057","27bc42aaeb1540e87949a69ebeb4eb4c","Agus Winarto","10057","7","0","","25","73","197","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10108","10058","1c395dd594baa47728d72ffbc4258994","Mochamad Subechan","10058","7","0","","20","61","164","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10109","10059","e7ba053d8ba932b77348b3987ea0e40b","Adri Rachman","10059","7","0","","13","35","148","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10110","10060","e64928412aae022e2c27456df62dda09","Eko Hermansyah","10060","7","0","","13","35","17","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10111","10061","7fe3d16a83f683a0a7f1c029536bebe7","Suparjo","10061","7","0","8488-IMG-20181005-WA0000.jpg","13","35","17","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10112","10062","f892447540d0e840049183faa3109b1b","Juwadi","10062","7","0","628-2061-KTP.jpg","6","17","17","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10113","10063","c9f2f917078bd2db12f23c3b413d9cba","Fitri Handayani","10063","7","0","1918-20171221_194943.jpg","25","75","195","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10114","10064","41bacf567aefc61b3076c74d8925128f","Sukandana","10064","7","0","","15","44","164","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10115","10065","ffa4eb0e32349ae57f7a0ee8c7cd7c11","Suryo Subono","10065","7","0","","25","73","196","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10116","10066","955fd82131e15e7b5199cbc8f983306a","Abdul Moeis Boedijono","10066","7","0","","15","44","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10117","10067","792dd774336314c3c27a04bb260cf2cf","Jansen Jaya Rolas Hutagaol","10067","7","0","","13","37","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10118","10068","a4982cba8b4cbeb32a439f0367273fc8","Hery Muryanto","10068","7","0","","15","45","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10119","10069","530ad673015b98fcf4cdd5a68cb93d6c","Sigit Wahyu Ichtijar","10069","7","0","9481-IMG20180828120409.jpg","13","37","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10120","10070","1aab7baa714e14868fe9eac65fcbd315","Mulyato","10070","7","0","7607-IMG_20181214_215023.jpg","15","45","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10121","10071","4910fcdaedc2be5c5f05533b7a9cb8c2","M. Chairul Anam","10071","7","0","","14","40","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10122","10072","cc2b1ba0368ccd98d5bed7e2e97b4bb0","Teddy Arrisandi","10072","7","0","","15","44","92","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10123","10073","657e31ff3231b847d7604f6647a2dfc9","Aries Askandar","10073","7","0","","7","20","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10124","10074","95a2e3eab8bf82eef0459536d23be6a3","Muhammad Arsyad","10074","7","0","","14","38","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10125","10075","2e5050938e0df629a2f2c5ff24fe66c6","Dedy Sutikno","10075","7","0","","14","38","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10126","10076","11ed516444b2593eaba7f2c2bb63483e","Edwin Andry Sumala","10076","7","0","","7","23","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10127","10077","0e15048bf23f8cf2c4d71fe8d5272c15","Ismail","10077","7","0","3716-IMG-20181208-WA0012.jpg","15","44","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10128","10078","2754518221cfbc8d25c13a06a4cb8421","Afri Tri Haryono","10078","7","0","","8","26","187","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10129","10079","273a8a2958ffca969e62c57ee568d522","Helmi Yunus","10079","7","0","","16","46","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10130","10080","ebd774c929a7f6c7e5df19e355f61e23","Andri Munandar","10080","7","0","5653-Andre Munandar 4x6.jpg","21","64","180","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10131","10081","725215ed82ab6306919b485b81ff9615","Sudarmadi","10081","7","0","","21","64","192","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10132","10082","9b22a40256b079f338827b0ff1f4792b","Prins Handoyo","10082","7","0","","21","64","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10133","10083","a46703c2f2e1c83edd4ffc41aa93a150","Bakti Sihombing","10083","7","0","893-BAKTI SIHOMBING 4x6 2.jpg","21","64","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10134","10084","b2df8d1dc5317b2b7951398ed39a00ac","Julpikar","10084","7","0","4310-JULPIKAR.jpeg","21","64","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10135","10085","5e62c1998206e0110459a6143546fe2e","Rahmatul Aini","10085","7","0","1179-pp.jpg","21","64","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10136","10086","6412121cbb2dc2cb9e460cfee7046be2","Supriadi","10086","7","0","8026-WhatsApp Image 2018-12-14 at 2.10.50 PM.jpeg","21","64","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10137","10087","afc2637129ad904485e07d2c0e6b0688","Rahmadi Panjaitan","10087","7","0","","21","64","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10138","10088","42edd1ec1dc5f5c1f11fd74a959e96c9","Aris Widodo","10088","7","0","","17","49","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10139","10089","e710549329cbc30d8cfa23cdd4b97f2f","Saiful","10089","7","0","","17","49","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10140","10090","4392e631da381761421d5e1e0c3de25f","Hery Wahyu Noertjahyo","10090","8","0","","17","49","91","4","12","7","","1","0","3600","2","10","1","","");
INSERT INTO tbl_user VALUES("10141","10091","b219f59c2dd596abfadbcecfc2277659","Iwan Dhani Gunawan","10091","7","0","","11","33","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10142","10092","c0c3a9fb8385d8e03a46adadde9af3bf","Budi Lukman","10092","7","0","","11","33","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10143","10093","bffbc93c08bb822842c8991709fc7714","Dedi Kusnadi","10093","7","0","7968-20181214_200044.jpg","11","33","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10144","10094","018a1b6ccd2ec81361657e259155895a","Deni Catur Wardani","10094","7","0","","11","33","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10145","10095","253d812cbfbb77c03b910f9897e9487d","Asep Sugiri","10095","7","0","","11","33","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10146","10096","ee4117572afbc0cf760f70714af0ec52","Boni Pasius Silalahi","10096","7","0","5285-WhatsApp Image 2018-12-17 at 12.41.16.jpeg","11","33","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10147","10097","23b702c4c421ddb2d023fee968c0d839","Dadan Kusnidar","10097","7","0","","11","34","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10148","10098","c876914f82ce54cb533b186afd41166e","Aa Dedih","10098","7","0","","11","34","88","4","12","7","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10149","10099","b5d4eea20a5609fc4663e196962f6499","Roni Yusnandar","10099","6","0","3805-roniyusnandar.jpg","19","55","111","3","12","2","","1","0","3600","1","8","0","","");
INSERT INTO tbl_user VALUES("10150","D0008","0630f67b2c1133eb96171a870d5147a9","Tita Paulina Purbasari","D0008","3","0","6682-tita.jpg","1","1","5","3","8","1","","1","0","3600","1","3","0","08 Jan 2019 20:19:48","");
INSERT INTO tbl_user VALUES("10151","D0009","0cd125dfbdbe9d67ada8ebd76246f41c","Dian Takdir Badrsyah","D0009","3","0","9529-dian takdir.jpg","1","1","6","2","12","1","","1","0","3600","2","3","0","","");
INSERT INTO tbl_user VALUES("10152","K0005","a29e39366bc75d66b57f8e2536fe9312","Donny Arsal","K0005","10","0","","0","0","1","1","12","1","","1","0","3600","1","1","0","","");
INSERT INTO tbl_user VALUES("10153","PK088","e8112adaafb932bcab8dfdb9e2a7802c","Arief Fauzi","PK088","6","0","6417-ariffauzi.jpg","18","52","100","5","12","3","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10154","PK089","e8d09acfaad3ecf09242168db4788494","Wahju Widodo","PK089","5","0","","5","15","62","5","12","4","","1","0","3600","2","6","0","","");
INSERT INTO tbl_user VALUES("10155","PK090","71123e6a0057aaca15f4d9ef40d51f1d","Sofyan Wahyudi","PK090","8","0","1978-24059057_1572125759546627_497678161923898257_n.jpg","5","14","64","5","0","6","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10156","PK092","c6f3b2844dbaf9894dd271601421d43c","Arief Rachman Eka Putra","PK092","7","0","","14","38","68","5","12","5","","1","0","3600","2","9","1","","");
INSERT INTO tbl_user VALUES("10157","PK093","0bc89c6d26889cac577a464e7b77e594","Mohammad Rizal Syarief","PK093","6","0","2092-rizal latar merah.jpg","5","14","67","5","0","4","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10158","PK094","7a2fe59579b1a0becdcaab873d563560","Een Ahmadan Yoga Wilanda","PK094","7","0","358-Wildan 1.jpg","5","14","64","5","0","6","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10159","PK096","b0dc070f96ee8d600d2680e8329e1b29","Indah Susanti","PK096","6","0","1030-indah.jpg","2","4","19","5","0","6","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10160","PK097","fd788805739e13e3a728781093a5af22","Inggrid Vio Fernanda","PK097","8","0","5146-IMG-20180628-WA0012.jpg","5","13","64","5","0","5","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10161","PK098","8596a6ac50e165aebcc1595c461eff24","Adia Puja Pradana","PK098","6","0","1258-adia.jpg","2","3","12","5","0","6","","1","0","3600","2","8","0","","");
INSERT INTO tbl_user VALUES("10162","PK099","27345d25923b27b503c6bc82a4232684","Rizqa Amalia","PK099","7","0","","5","15","63","5","0","6","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10163","PK100","228b37d4d7094a73064949d8b1837970","Nur Agus Rachmawan","PK100","8","0","","5","13","64","5","0","5","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10164","PK101","95b3549132183db7c1d54f0c9257cbfd","Swanti","PK101","8","0","5271-IMG_9359 a.jpg","5","15","64","5","0","6","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10165","PK104","167abe53c7adf82af922c36296c1f889","M. Syaiful Rifqi adi Khrisna","PK104","7","0","","5","15","70","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10166","PK105","5c922c1bf3889a3683229da959290436","Salma Jounarasti Hasniza","PK105","7","0","1851-salma.jpg","3","7","36","5","0","1","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10167","PK106","29a4d75a5d500aa76dbae56082a17c76","Yuni Nurmaya","PK106","8","0","3221-WhatsApp Image 2018-12-11 at 16.33.08.jpeg","5","13","65","5","0","6","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10168","PK107","6234e45cf0a69c9846ccf2df739b89db","Hasan Mauludi","PK107","8","0","4007-1.png","5","13","65","4","12","5","","1","0","3600","2","10","0","","");
INSERT INTO tbl_user VALUES("10169","PK058","624717d9f15d1bf3e5f94d27a1a515b1","Anang Daus Soemartri","PK058","7","0","9609-anang.jpg","3","9","43","5","12","5","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10170","PK091","e3dd589db435b6414ce32434460cc359","Fauzi Rachman Juang Pribadi","PK091","7","0","","5","15","69","5","0","4","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10171","PK103","28d3c0d6aeecdd362803440626770f52","Muhammad Nofi Risdianto","PK103","7","0","6760-WhatsApp Image 2018-12-11 at 16.15.01.jpeg","5","13","68","5","0","1","","1","0","3600","2","9","0","","");
INSERT INTO tbl_user VALUES("10172","10004","d783823cc6284b929c2cd8df2167d212","Dian Agustian Hadi","10049","4","0","","18","50","95","3","12","3","","1","0","3600","1","4","0","","");
INSERT INTO tbl_user VALUES("10173","marketing","c769c2bd15500dd906102d9be97fdceb","Admin Marketing","0","1","0","","","","","4","0","6","","1","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10174","direktur","4fbfd324f5ffcdff5dbf6f019b02eca8","Admin Direktur","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10175","pengembangan","7111494d4869feeddd17652b086e0b67","Admin Pengembangan Bisnis","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10176","teknik","58029eb6d2dd138b3da6ee4b2bb71d8c","Admin Teknik","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10177","jmrbtip","498ab3e5fa941a600ac8b28da348791d","Admin TIP","0","1","0","","","","","0","0","0","","1","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10178","keuangan","a4151d4b2856ec63368a7c784b1f0a6e","Admin Keuangan","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0","","");
INSERT INTO tbl_user VALUES("10180","10100","ac2d43ef3f26cc74de242202e822ecb0","Anggrainy","10100","5","0","4343-5072-KTP-Anggre.jpg","19","54","108","3","12","2","","1","0","3600","1","6","1","","");
INSERT INTO tbl_user VALUES("10181","10051","a536fb5480db8bdbb84daffe345c675b","Saktia Lesan Dianasari","10051","4","0","","26","76","200","3","12","7","","1","0","3600","1","4","1","","");
INSERT INTO tbl_user VALUES("10182","10050","eeb29740e8e9bcf14dc26c2fff8cca81","Aprilizayanti Putri","10050","4","0","","27","77","202","3","12","7","","1","0","3600","1","4","1","","");
INSERT INTO tbl_user VALUES("10183","10046","827a9e878169d065f4a9a6c451ba0207","Usep Widya Kusmayadi","10046","5","0","5523-USEP.png","11","33","126","3","12","7","","1","0","3600","1","6","1","06 Jan 2019 18:36:11","");
INSERT INTO tbl_user VALUES("10184","10101","6dfc35c47756e962ef055d1049f1f8ec","Tony Tri Hendarta","10101","5","0","","19","56","119","3","0","2","","1","0","","1","6","0","","");
INSERT INTO tbl_user VALUES("10185","PK108","7a0a87077cb3c4edd20ce4ae4d5ccc85","Yahya Ahmadi","PK108","8","0","","2","3","9","5","0","6","","1","0","","2","10","0","","");
INSERT INTO tbl_user VALUES("10186","PK109","e01de93068ff77e671502e4580f87011","Elisa Soedarto","PK109","7","0","","18","53","103","5","0","3","","1","0","","2","9","0","","");
INSERT INTO tbl_user VALUES("10187","10102","696b0709b9a2d7d9e2c25b71476ec255","Ihsanuddin Saputra, ST","10102","5","0","1753-IHSAN.jpg","5","14","62","3","0","4","","1","0","","1","6","0","","");
INSERT INTO tbl_user VALUES("10188","10103","f53eb4122d5e2ce81a12093f8f9ce922","Khrisnawan Arief Wicaksono, ST","10103","5","0","76-KRISNAWAN.jpg","4","11","34","3","0","4","","1","0","","1","6","0","","");



DROP TABLE tbl_user_gaji;

CREATE TABLE `tbl_user_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_user_gaji VALUES("1","admingaji","c4d121a30f17422e796ab0c91ab9cc4b");



DROP TABLE tbl_view_departemen;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_view_departemen` AS select `tbl_department`.`unit_kerja` AS `unit_kerja`,`tbl_department`.`kode_unit` AS `kode_unit`,`tbl_sub_unit`.`sub_unit` AS `sub_unit`,`tbl_sub_unit`.`kode_sub` AS `kode_sub` from (`tbl_department` join `tbl_sub_unit` on((`tbl_department`.`kode_unit` = `tbl_sub_unit`.`kode_unit`)));

INSERT INTO tbl_view_departemen VALUES("KOMISARIS","0","Office","1");
INSERT INTO tbl_view_departemen VALUES("DIREKSI","1","Office Direksi","1");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN MARKETING & SALES","2","DEPARTEMEN MARKETING & SALES","2");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN MARKETING & SALES","2","SEKSI MARKETING","3");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN MARKETING & SALES","2","SEKSI SALES & FORCE","4");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN MARKETING & SALES","2","SEKSI ASSET MANAGEMENT","5");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN MARKETING & SALES","2","GEDUNG GRAHA SIMATUPANG","27");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN BUSINESS DEVELOPMENT","3","DEPARTEMENT BUSINESS DEVELOPMENT","6");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN BUSINESS DEVELOPMENT","3","SEKSI PROPERTY DEVELOPMENT","7");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN BUSINESS DEVELOPMENT","3","SEKSI RELATED BUSINESS DEVELOPMENT","8");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN BUSINESS DEVELOPMENT","3","SEKSI LAND AND PERMIT","9");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN BUSINESS DEVELOPMENT","3","SEKSI PROPERTY PLANNING","26");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN ENGINEERING","4","DEPARTEMEN ENGINEERING","10");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN ENGINEERING","4","SEKSI PROPERTY ENGINEERING & MAINTENANCE","11");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN ENGINEERING","4","SEKSI BUSINESS ENGINEERING & MAINTENANCE","12");
INSERT INTO tbl_view_departemen VALUES("PROJECT PROPERTY","5","PROJECT RESIDENCE SAWANGAN DAN KAUMSARI","13");
INSERT INTO tbl_view_departemen VALUES("PROJECT PROPERTY","5","PROJECT SPRING RESIDENCE SIDOARJO","13");
INSERT INTO tbl_view_departemen VALUES("PROJECT PROPERTY","5","PROJECT ROYAL PANDAAN","13");
INSERT INTO tbl_view_departemen VALUES("PROJECT PROPERTY","5","PROJECT OFFICE ONE","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)","6","KM 407 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)","6","KM 418 B","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SEMARANG BATANG (JSB)","6","KM 420 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","KM 519 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","KM 519 B","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","KM 538 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","KM 538 B","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","KM 575 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA SOLO NGAWI (JSN)","7","KM 575 B","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA KERTOSONO NGAWI (JKN)","8","KM 597 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA KERTOSONO NGAWI (JKN)","8","KM 597 B","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA GEMPOL PASURUAN (JGP)","9","KM 64 A","13");
INSERT INTO tbl_view_departemen VALUES("RUAS PROYEK JASAMARGA GEMPOL PASURUAN (JGP)","9","KM 64 B","13");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN RELATED BUSINESS OPERATION","10","DEPARTEMEN RELATED BUSINESS OPERATION","14");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN RELATED BUSINESS OPERATION","10","SEKSI UTILITIES & ADVERTISING","15");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN RELATED BUSINESS OPERATION","10","SEKSI AREA CONTROL","16");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN RELATED BUSINESS OPERATION","10","SEKSI MANAGER REST AREA","");
INSERT INTO tbl_view_departemen VALUES("REST AREA PURBALEUNYI","11","KM 88 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA PURBALEUNYI","11","KM 88 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA PALIKANCI","12","KM 207 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SEMARANG BATANG (JSB)","13","KM 407 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SEMARANG BATANG (JSB)","13","KM 418 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SEMARANG BATANG (JSB)","13","KM 420 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SOLO NGAWI (JSN)","14","KM 519 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SOLO NGAWI (JSN)","14","KM 519 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SOLO NGAWI (JSN)","14","KM 538 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SOLO NGAWI (JSN)","14","KM 538 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SOLO NGAWI (JSN)","14","KM 575 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SOLO NGAWI (JSN)","14","KM 575 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA KERTOSONO NGAWI (JKN)","15","KM 597 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA KERTOSONO NGAWI (JKN)","15","KM 597 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA GEMPOL PASURUAN (JGP)","16","KM 64 A","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA GEMPOL PASURUAN (JGP)","16","KM 64 B","17");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA SURABAYA MOJOKERTO (JSM)","17","KM 725 A","17");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN FINANCE & ACCOUNTING","18","DEPARTEMEN FINANCE & ACCOUNTING","18");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN FINANCE & ACCOUNTING","18","SEKSI FINANCE & BUDGETING","19");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN FINANCE & ACCOUNTING","18","SEKSI TREASURY","20");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN FINANCE & ACCOUNTING","18","SEKSI ACCOUNTING & TAX","21");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN HR & GENERAL AFFAIR","19","DEPARTEMENT HR & GENERAL AFFAIR","22");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN HR & GENERAL AFFAIR","19","SEKSI HR & GENERAL AFFAIR","23");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN HR & GENERAL AFFAIR","19","SEKSI LEGAL & COMPLAINCE","24");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN HR & GENERAL AFFAIR","19","SEKSI INFORMATION TECHNOLOGY","25");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA PANDAAN MALANG (JPM)","20","KM 7 A","28");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA PANDAAN MALANG (JPM)","20","KM 7 B","0");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA PANDAAN MALANG (JPM)","20","KM 26 A","29");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA PANDAAN MALANG (JPM)","20","KM 26 B","30");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA MEDAN KUALANAMU (JMK)","21","KM 67 A","31");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA MEDAN KUALANAMU (JMK)","21","KM 67 B","32");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA BALIKPAPAN SAMARINDA","22","KM 26 A","33");
INSERT INTO tbl_view_departemen VALUES("REST AREA JASAMARGA BALIKPAPAN SAMARINDA","22","KM 26 B","34");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN UTILITAS DAN IKLAN","24","DEPARTEMEN UTILITAS DAN IKLAN","");
INSERT INTO tbl_view_departemen VALUES("REGIONAL TIP / TI","25","WILAYAH JAWA TENGAH","");
INSERT INTO tbl_view_departemen VALUES("REGIONAL TIP / TI","25","WILAYAH JAWA BARAT","");
INSERT INTO tbl_view_departemen VALUES("REGIONAL TIP / TI","25","WILAYAH JAWA TIMUR","");
INSERT INTO tbl_view_departemen VALUES("REGIONAL TIP / TI","25","WILAYAH LUAR JAWA","");
INSERT INTO tbl_view_departemen VALUES("REGIONAL TIP / TI","25","REGIONAL TIP / TI","");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN ENGINEERING RELATED BUSINESS","26","DEPARTEMEN ENGINEERING RELATED BUSINESS","");
INSERT INTO tbl_view_departemen VALUES("DEPARTEMEN KEUANGAN DAN SDMU RELATED BUSINESS","27","DEPARTEMEN KEUANGAN DAN SDMU RELATED BUSINESS","");



