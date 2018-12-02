DROP TABLE tabel_role;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_role` AS select `tbl_user`.`id_user` AS `id_user`,`tbl_user`.`username` AS `username`,`tbl_user`.`password` AS `password`,`tbl_user`.`nama` AS `nama`,`tbl_user`.`nip` AS `nip`,`tbl_user`.`admin` AS `admin`,`tbl_user`.`tujuan` AS `tujuan`,`tbl_role`.`role` AS `role`,`tbl_user`.`unit` AS `unit`,`tbl_user`.`divisi` AS `divisi`,`tbl_user`.`sub_unit` AS `sub_unit`,`tbl_user`.`jabatan` AS `jabatan`,`tbl_user`.`status_karyawan` AS `status_karyawan`,`tbl_user`.`status_aktif` AS `status_aktif`,`tbl_user`.`status_tugas` AS `status_tugas` from (`tbl_role` join `tbl_user` on((`tbl_user`.`admin` = `tbl_role`.`admin`)));

INSERT INTO tabel_role VALUES("1","sdm","13bb8b589473803f26a02e338f949b8c","Admin SDM - Umum","-","1","0","Super Admin","19","2","","","4","1","2");
INSERT INTO tabel_role VALUES("8","admin","d69ed7e8520a6ee31d5ab1d597726f34","Super Admin","-","1","0","Super Admin","0","2","","BANG ADMIN","0","1","0");
INSERT INTO tabel_role VALUES("10173","marketing","c769c2bd15500dd906102d9be97fdceb","Admin Marketing","0","1","0","Super Admin","","6","","","4","1","0");
INSERT INTO tabel_role VALUES("10174","direktur","4fbfd324f5ffcdff5dbf6f019b02eca8","Admin Direktur","0","1","0","Super Admin","","0","","","0","0","0");
INSERT INTO tabel_role VALUES("10175","pengembangan","7111494d4869feeddd17652b086e0b67","Admin Pengembangan Bisnis","0","1","0","Super Admin","","0","","","0","0","0");
INSERT INTO tabel_role VALUES("10176","teknik","58029eb6d2dd138b3da6ee4b2bb71d8c","Admin Teknik","0","1","0","Super Admin","","0","","","0","0","0");
INSERT INTO tabel_role VALUES("10177","jmrbtip","498ab3e5fa941a600ac8b28da348791d","Admin TIP","0","1","0","Super Admin","","0","","","0","1","0");
INSERT INTO tabel_role VALUES("10178","keuangan","a4151d4b2856ec63368a7c784b1f0a6e","Admin Keuangan","0","1","0","Super Admin","","0","","","0","0","0");
INSERT INTO tabel_role VALUES("10025","D0005","fed2bb44e5db4d3b34370d2ed061fbbd","Irwan Artigyo Sumadiyo","D0005","2","0","Direktur Utama","1","1","Office Direksi","4","2","1","2");
INSERT INTO tabel_role VALUES("10150","D0008","0630f67b2c1133eb96171a870d5147a9","Tita Paulina Purbasari","D0008","3","0","Direktur","1","1","1","5","3","1","1");
INSERT INTO tabel_role VALUES("10151","D0009","0cd125dfbdbe9d67ada8ebd76246f41c","Dian Takdir Badrsyah","D0009","3","0","Direktur","1","1","1","6","2","1","2");
INSERT INTO tabel_role VALUES("6","10022","93a27b0bd99bac3e68a440b48aa421ab","Sumarsono","10022","4","0","General Manager","19","2","54","106","3","1","1");
INSERT INTO tabel_role VALUES("7","10001","d89f3a35931c386956c1a402a8e09941","Hubby Ramdhani","10001","4","0","General Manager","10","7","30","75","3","0","1");
INSERT INTO tabel_role VALUES("9999","tampung","tampung","-","tampung","4","0","General Manager","0","0","","","0","0","0");
INSERT INTO tabel_role VALUES("10003","10014","7b9d31aa17b849b238ab79cef0733041","Meta Herlina Puspitaningtyas","10014","4","0","General Manager","3","5","DEPARTEMENT BUSINESS DEVELOPMENT","32","3","1","1");
INSERT INTO tabel_role VALUES("10006","10017","24064e6576a74af1b8eda89277c6b659","Sri Rejeki Handayani","10017","4","0","General Manager","18","3","50","95","3","0","0");
INSERT INTO tabel_role VALUES("10008","10020","c1722a7941d61aad6e651a35b65a9c3e","Donny Ikhwan","10020","4","0","General Manager","4","4","DEPARTEMEN ENGINEERING","46","3","1","1");
INSERT INTO tabel_role VALUES("10010","10023","7b8bc3700ce886e8627f41e799fe764f","Imad Zaky Mubarak","10023","4","0","General Manager","2","6","2","8","3","1","1");
INSERT INTO tabel_role VALUES("10024","10040","f250daff6a09865ff432821b2adac54f","Mintari Yulianingsih","10040","4","0","General Manager","10","5","DEPARTEMEN RELATED BUSINESS OPERATION","32","1","0","1");
INSERT INTO tabel_role VALUES("10172","10004","d783823cc6284b929c2cd8df2167d212","Dian Agustian Hadi","10004","4","0","General Manager","18","3","50","95","3","1","1");
INSERT INTO tabel_role VALUES("9","10003","f5dffc111454b227fbcdf36178dfe6ac","Uci Sanusi","10003","5","0","Manager","18","3","52","98","3","1","1");
INSERT INTO tabel_role VALUES("10001","10010","a17479231dc298309a3fda7d7d00111a","Irwansyah Rinaldhi","10010","5","0","Manager","14","7","38","87","3","0","1");
INSERT INTO tabel_role VALUES("10002","10011","a2369958a9645eac52b58a8134e2ef5a","Dede Ahmad Nurhadi","10011","5","0","Manager","12","7","48","147","3","0","1");
INSERT INTO tabel_role VALUES("10004","10015","342b5fe6486788799659c39bbfc3fa02","Marlina Ririn Indriyani","10015","5","0","Manager","2","6","SEKSI MARKETING","10","3","1","1");
INSERT INTO tabel_role VALUES("10005","10016","1ce9168a60deae4a994dbd5b2d145699","Engkun Purkonudin","10016","5","0","Manager","11","7","33","87","3","0","1");
INSERT INTO tabel_role VALUES("10007","10019","73c730319cf839f143bf40954448ce39","Hanna Farida Tampubolon","10019","5","0","Manager","10","7","SEKSI AREA CONTROL","83","3","0","1");
INSERT INTO tabel_role VALUES("10011","10025","76d0baca6075c45cd8a3a55fa6a23c05","Tria Oktaviani","10025","5","0","Manager","4","4","Office","48","3","1","1");
INSERT INTO tabel_role VALUES("10012","10027","3882c5a9869d86def6b7be879605522e","Sumarmi","10027","5","0","Manager","19","2","55","108","3","1","1");
INSERT INTO tabel_role VALUES("10014","10030","08d562c1eedd30b15b51e35d8486d14c","Irwan Zaini Luthfi","10030","5","0","Manager","13","7","35","87","3","0","1");
INSERT INTO tabel_role VALUES("10023","10039","2a8009525763356ad5e3bb48b7475b4d","Ade Gustika","10039","5","0","Manager","3","5","58","186","3","1","1");
INSERT INTO tabel_role VALUES("10027","PK102","04e246e949e3a9b2b80c4d7d3bef872d","Herdwin Nofrian","PK102","5","0","Manager","18","3","53","101","5","1","2");
INSERT INTO tabel_role VALUES("10031","PK016","04ce83bf1967d561285890241abf11eb","Handa Rudita","PK016","5","0","Manager","3","5","SEKSI LAND AND PERMIT","41","5","0","2");
INSERT INTO tabel_role VALUES("10051","PK038","beb1c0c148f8a01a9b7a19e4f7d009c1","Adhi Sujana","PK038","5","0","Manager","12","7","KM 207 A","126","5","0","2");
INSERT INTO tabel_role VALUES("10057","PK045","0e0f18e07ffc9e2d40ac8e0f2d3246fd","Andi Rusdiana","PK045","5","0","Manager","5","4","Office","62","5","0","2");
INSERT INTO tabel_role VALUES("10059","PK047","00ea5c35f3381114e4471f36b26998e1","Mustofa","PK047","5","0","Manager","6","4","KM 407 A","62","5","0","2");
INSERT INTO tabel_role VALUES("10063","PK051","4f4ec923ed72d8d6ffee4f89f1e0e9c4","Rizalulloh","PK051","5","0","Manager","5","4","Office","62","5","0","2");
INSERT INTO tabel_role VALUES("10082","PK073","2e11e90565e64fb4a5b25af3a62044c1","Vishnu Damar Sasongko","PK073","5","0","Manager","18","3","51","96","5","1","2");
INSERT INTO tabel_role VALUES("10083","PK074","1f22e88f5a7dd6969531ddb66f3e828b","G. Heryawan Indrayatna","PK074","5","0","Manager","2","1","5","25","5","1","2");
INSERT INTO tabel_role VALUES("10086","PK077","2851d33a29f649700b256aeae59a506f","Lowig Caesar Sinaga","PK077","5","0","Manager","8","4","26","62","5","0","2");
INSERT INTO tabel_role VALUES("10093","10042","425f116bf53f051c57d1670a04fb4a0c","Slamet Purwanto","10042","5","0","Manager","19","2","57","122","3","1","1");
INSERT INTO tabel_role VALUES("10094","10043","d30cfe3deca3ec4de141fcf9c31097a3","Indri Kurnia Lestari","10043","5","0","Manager","3","5","SEKSI PROPERTY DEVELOPMENT","34","3","1","1");
INSERT INTO tabel_role VALUES("10095","10044","9c16b0e83f09596202f402261f25c8a9","Tisa Yuanita","10044","5","0","Manager","2","6","4","18","3","1","1");
INSERT INTO tabel_role VALUES("10096","10045","997e65474a248252883b485717f7d098","Evil Ramadhani","10045","5","0","Manager","4","4","SEKSI BUSINESS ENGINEERING & MAINTENANCE","55","3","0","1");
INSERT INTO tabel_role VALUES("10154","PK089","e8d09acfaad3ecf09242168db4788494","Wahju Widodo","PK089","5","0","Manager","5","4","15","62","5","1","2");
INSERT INTO tabel_role VALUES("10009","10021","f702defbc67edb455949f46babab0c18","Roni Wijaya","10021","6","0","Assistant Manager","2","6","3","12","3","1","1");
INSERT INTO tabel_role VALUES("10013","10029","6072cd1424d62d9c33c6a7a82cacd40e","Edmundus Edy Pancaningtyas","10029","6","0","Assistant Manager","19","2","SEKSI HR & GENERAL AFFAIR","111","3","1","1");
INSERT INTO tabel_role VALUES("10015","10031","d2cb583f4b5bdc51b965ae555ee6bca5","Katni","10031","6","0","Assistant Manager","18","3","52","77","3","1","1");
INSERT INTO tabel_role VALUES("10037","PK023","ff06415acd8ad03505030f2baac4607c","Widyadji Sasono","PK023","6","0","Assistant Manager","18","3","51","97","5","1","2");
INSERT INTO tabel_role VALUES("10040","PK027","dced105c62a12c5b94280160612ad040","Gatri Ayuning Lestari","PK027","6","0","Assistant Manager","18","3","SEKSI ACCOUNTING & TAX","102","5","1","2");
INSERT INTO tabel_role VALUES("10042","PK029","0792bd88dc6cc0dd49e7cb0939bccbfd","Isna Rifai","PK029","6","0","Assistant Manager","5","7","15","67","5","1","2");
INSERT INTO tabel_role VALUES("10044","PK031","3168f142ce3904a787b2ab3f68ae5968","Abdurrahman","PK031","6","0","Assistant Manager","4","4","SEKSI PROPERTY ENGINEERING & MAINTENANCE","49","5","1","2");
INSERT INTO tabel_role VALUES("10045","PK032","3384d017ec0e7f0f17d2c3d18b608c24","Muhammad Fahri","PK032","6","0","Assistant Manager","6","4","18","67","5","0","2");
INSERT INTO tabel_role VALUES("10053","PK040","c2797a8ce242cb02cd045f49b1754740","Edi Junaedi","PK040","6","0","Assistant Manager","6","4","18","67","5","0","2");
INSERT INTO tabel_role VALUES("10054","PK041","e900266bd33ff5bbf04c76871467509a","Lucyanna Nilasary","PK041","6","0","Assistant Manager","19","0","56","121","5","0","0");
INSERT INTO tabel_role VALUES("10055","PK043","3f2fb0a541774e24ac0eefd7c1775299","Agus Setyawan","PK043","6","0","Assistant Manager","7","5","20","67","5","0","2");
INSERT INTO tabel_role VALUES("10056","PK044","e8c3701613c6192f5578534912bc410f","Hendry","PK044","6","0","Assistant Manager","6","4","KM 418 B","67","5","0","2");
INSERT INTO tabel_role VALUES("10058","PK046","fdf1adf0071c444ec897f638453f5d67","Rizal Kamaruzzaman","PK046","6","0","Assistant Manager","5","4","14","67","5","1","2");
INSERT INTO tabel_role VALUES("10060","PK048","064fa76b894021616335263a1c7fe7f2","Dian Ika Ningrum","PK048","6","0","Assistant Manager","19","2","55","110","5","1","2");
INSERT INTO tabel_role VALUES("10062","PK050","343979a6222fcf5c4f50a8fd4ce710d1","Adya Kemara","PK050","6","0","Assistant Manager","2","6","59","27","5","1","2");
INSERT INTO tabel_role VALUES("10066","PK054","9276d8c623b5f0930f93cf07fae0845f","Angga Saputra","PK054","6","0","Assistant Manager","0","1","Office","20","1","0","0");
INSERT INTO tabel_role VALUES("10078","PK069","a59eeaf48b22ebf1fee0b715731dc7ca","Arsindiany Alambago","PK069","6","0","Assistant Manager","0","3","","","5","0","0");
INSERT INTO tabel_role VALUES("10087","PK078","f02983334e62f0fe8cc08f8ad629cb47","Arif Rahman","PK078","6","0","Assistant Manager","8","7","26","67","5","0","2");
INSERT INTO tabel_role VALUES("10088","PK079","4d81e61f13169060aaef7103749b888a","Antonius Catur Satriono","PK079","6","0","Assistant Manager","6","7","17","67","5","0","2");
INSERT INTO tabel_role VALUES("10092","10041","6d38b80c1da3bd9d8717ce47fea2acd7","Kristiana Live Sonya","10041","6","0","Assistant Manager","2","6","3","26","3","1","1");
INSERT INTO tabel_role VALUES("10149","10099","995ca733e3657ff9f5f3c823d73371e1","Roni Yusnandar","10099","6","0","Assistant Manager","19","2","55","111","3","1","1");
INSERT INTO tabel_role VALUES("10153","PK088","9952d201748ab302fa3b8952a4217eff","Arief Fauzi","PK088","6","0","Assistant Manager","18","3","50","100","5","1","2");
INSERT INTO tabel_role VALUES("10157","PK093","73bf89e8747e82fb3b464a7461845aa2","Mohammad Rizal Syarief","PK093","6","0","Assistant Manager","5","4","14","67","5","1","2");
INSERT INTO tabel_role VALUES("10159","PK096","b0dc070f96ee8d600d2680e8329e1b29","Indah Susanti","PK096","6","0","Assistant Manager","2","6","4","19","5","1","2");
INSERT INTO tabel_role VALUES("10161","PK098","8596a6ac50e165aebcc1595c461eff24","Adia Puja Pradana","PK098","6","0","Assistant Manager","2","6","3","12","5","1","2");
INSERT INTO tabel_role VALUES("2","PK068","37d153a06c79e99e4de5889dbe2e7c57","Aprillia Hermansyah","PK068","7","0","Senior Officer","4","4","10","47","5","1","2");
INSERT INTO tabel_role VALUES("4","PK060","d69ed7e8520a6ee31d5ab1d597726f34","Dendito Pratama","PK060","7","0","Senior Officer","19","2","57","123","5","1","2");
INSERT INTO tabel_role VALUES("10016","10032","c63a5650dcd0bf04b35bd712466010bc","Muhamad Agus Sunardi","10032","7","0","Senior Officer","14","7","KM 519 A","159","4","0","2");
INSERT INTO tabel_role VALUES("10017","10033","10fa5eb83300e5f592b9b35a0e07fc3f","Setya Prayitno","10033","7","0","Senior Officer","14","7","KM 519 A","156","4","0","2");
INSERT INTO tabel_role VALUES("10018","10034","b2fb19fe374529d3658197da0657ab0c","Bagus Sugiharto","10034","7","0","Senior Officer","8","7","26","164","4","0","2");
INSERT INTO tabel_role VALUES("10019","10035","329d1ea6acb272924f991d523b2d2b80","Karmin","10035","7","0","Senior Officer","8","7","Office","148","4","0","2");
INSERT INTO tabel_role VALUES("10020","10036","7c127e0c66f06e58c7c7310a7c6fa488","Rudi Tatang","10036","7","0","Senior Officer","13","7","Office","148","5","0","2");
INSERT INTO tabel_role VALUES("10021","10037","4ccea3161064506dda8e0c9fd416d1ae","Sandy Irawan","10037","7","0","Senior Officer","14","7","38","156","5","0","2");
INSERT INTO tabel_role VALUES("10022","10038","0f6b1f657ac30ab76519ed4c677e9909","Irwan Pahala Simanungkalit","10038","7","0","Senior Officer","17","7","49","180","1","0","2");
INSERT INTO tabel_role VALUES("10034","PK020","a349c90fb067eae78defd650c86e942e","Ibnu Sarjono","PK020","7","0","Senior Officer","5","4","16","71","5","1","2");
INSERT INTO tabel_role VALUES("10035","PK021","942e07c72a2f12ef5368b7dfd5c53116","Salmadi","PK021","7","0","Senior Officer","12","7","Office","131","5","0","2");
INSERT INTO tabel_role VALUES("10048","PK035","57bf2d8dc369f5238ad508888f101ef9","Reza Ahmad Fauzi","PK035","7","0","Senior Officer","5","5","13","71","5","1","2");
INSERT INTO tabel_role VALUES("10061","PK049","712de2419663f92177fbcca44f2f2ca8","Sofi Ratna Furi","PK049","7","0","Senior Officer","3","7","DEPARTEMENT BUSINESS DEVELOPMENT","15","5","0","2");
INSERT INTO tabel_role VALUES("10064","PK052","64eb6f33d79221581bfe7df31d065889","Ardo Yudha Barnesa","PK052","7","0","Senior Officer","3","5","6","36","5","1","2");
INSERT INTO tabel_role VALUES("10065","PK053","0d8b0770c8525638ea63cb1055070155","Melly Febriyanti","PK053","7","0","Senior Officer","2","6","2","15","5","1","2");
INSERT INTO tabel_role VALUES("10069","PK057","ae5318388db0dae818a4ddefd1560130","Muhamad Rizky Cahyadi","PK057","7","0","Senior Officer","5","6","14","64","5","1","2");
INSERT INTO tabel_role VALUES("10070","PK059","f5264fb5dd9e7a5f0625ead4cf99748a","Bimo Firizki Diadi","PK059","7","0","Senior Officer","4","4","10","54","5","1","2");
INSERT INTO tabel_role VALUES("10071","PK061","bbf6eb76300e11c07204fcb6b37c592f","Bayu Budi Utomo","PK061","7","0","Senior Officer","7","4","20","68","5","0","2");
INSERT INTO tabel_role VALUES("10072","PK062","9c33e65aa7f8d69effd6daaa3804c3d1","Nur Asty Pratiwi","PK062","7","0","Senior Officer","4","4","10","50","5","1","2");
INSERT INTO tabel_role VALUES("10073","PK063","487e7231a3d8a4c36226385643ea50e0","Sholahuddin Triwidinata","PK063","7","0","Senior Officer","5","4","13","68","5","1","2");
INSERT INTO tabel_role VALUES("10074","PK064","75245224b08457412ade2c4bdebc14a4","Bukry Chamma Siburian","PK064","7","0","Senior Officer","5","4","13","68","5","1","2");
INSERT INTO tabel_role VALUES("10075","PK065","b67923e5a6170f34c52e19086ea1aeed","Rizky Ehsy Pangarso","PK065","7","0","Senior Officer","2","6","3","17","5","1","2");
INSERT INTO tabel_role VALUES("10076","PK066","54a9676df022c0b88a9b43bba829add2","Latifah","PK066","7","0","Senior Officer","2","1","3","17","5","1","2");
INSERT INTO tabel_role VALUES("10077","PK067","3046f57a2a27fdd1edece2fbb3c9ffae","Ramdani Adam","PK067","7","0","Senior Officer","3","5","6","82","5","0","2");
INSERT INTO tabel_role VALUES("10081","PK072","6b62c56b6c78e81e262fc435b158f880","Mohamad Reza Pahlevi","PK072","7","0","Senior Officer","18","3","53","103","5","1","2");
INSERT INTO tabel_role VALUES("10084","PK075","dbfc021d832630aecab6a59665193b0f","Ario Seto","PK075","7","0","Senior Officer","15","3","44","70","5","1","2");
INSERT INTO tabel_role VALUES("10089","PK080","c11a2864e145cb5f0ec4ae89b12e390f","Agus Triwahyudi","PK080","7","0","Senior Officer","5","4","PROJECT ROYAL PANDAAN","68","5","1","2");
INSERT INTO tabel_role VALUES("10090","PK083","2b1a48519736b7da7d581e9647443f09","Robby Nugraha","PK083","7","0","Senior Officer","13","7","Office","85","5","0","2");
INSERT INTO tabel_role VALUES("10098","PK086","4603cf9abb94f77c71bc767ecea2333a","Syamsul Fadly","PK086","7","0","Senior Officer","4","4","12","59","5","1","2");
INSERT INTO tabel_role VALUES("10099","PK085","34b4f080b684b4105983b5c7d0ca04a0","Bayuaji Prabowo Nugroho","PK085","7","0","Senior Officer","5","4","16","73","5","1","2");
INSERT INTO tabel_role VALUES("10102","10052","d6f8d124087ad4c23fe66b89b7893523","Arief Hartono","10052","7","0","Senior Officer","12","7","KM 207 A","127","4","0","2");
INSERT INTO tabel_role VALUES("10103","10054","bef4d169d8bddd17d68303877a3ea945","Yayang Supiar","10054","7","0","Senior Officer","12","7","48","127","4","0","2");
INSERT INTO tabel_role VALUES("10104","10053","7fbfc161a3b873bf2119c788ed93d1f4","UJANG","10053","7","0","Senior Officer","12","7","Office","127","4","0","2");
INSERT INTO tabel_role VALUES("10105","10055","e4191d610537305de1d294adb121b513","Rd. MOCHAMAD ERWIN SISWANTO","10055","7","0","Senior Officer","12","7","Office","127","4","0","2");
INSERT INTO tabel_role VALUES("10106","10056","b59c21a078fde074a6750e91ed19fb21","DEDDY KHOIRUL ANAM","10056","7","0","Senior Officer","17","7","49","180","4","0","2");
INSERT INTO tabel_role VALUES("10107","10057","27bc42aaeb1540e87949a69ebeb4eb4c","AGUS WINARTO","10057","7","0","Senior Officer","17","7","KM 725 A","71","4","0","2");
INSERT INTO tabel_role VALUES("10108","10058","999df4ce78b966de17aee1dc87111044","MOCHAMAD SUBECHAN","10058","7","0","Senior Officer","15","7","KM 597 A","164","4","0","2");
INSERT INTO tabel_role VALUES("10109","10059","e7ba053d8ba932b77348b3987ea0e40b","Adri Rachman","10059","7","0","Senior Officer","13","7","35","148","4","0","2");
INSERT INTO tabel_role VALUES("10110","10060","e64928412aae022e2c27456df62dda09","Eko Hermansyah","10060","7","0","Senior Officer","13","7","35","17","4","0","2");
INSERT INTO tabel_role VALUES("10111","10061","7fe3d16a83f683a0a7f1c029536bebe7","SUPARJO","10061","7","0","Senior Officer","13","7","35","17","4","0","2");
INSERT INTO tabel_role VALUES("10112","10062","f892447540d0e840049183faa3109b1b","Juwadi","10062","7","0","Senior Officer","6","7","17","17","4","0","2");
INSERT INTO tabel_role VALUES("10113","10063","c9f2f917078bd2db12f23c3b413d9cba","Fitri Handayani","10063","7","0","Senior Officer","10","7","SEKSI AREA CONTROL","17","4","0","2");
INSERT INTO tabel_role VALUES("10114","10064","41bacf567aefc61b3076c74d8925128f","Sukandana","10064","7","0","Senior Officer","15","7","Office","17","4","0","2");
INSERT INTO tabel_role VALUES("10115","10065","ffa4eb0e32349ae57f7a0ee8c7cd7c11","Suryo Subono","10065","7","0","Senior Officer","13","7","KM 407 A","15","4","0","2");
INSERT INTO tabel_role VALUES("10116","10066","955fd82131e15e7b5199cbc8f983306a","Abdul Moeis Boedijono","10066","7","0","Senior Officer","15","7","KM 597 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10117","10067","792dd774336314c3c27a04bb260cf2cf","Jansen Jaya Rolas Hutagaol","10067","7","0","Senior Officer","13","7","KM 407 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10118","10068","a4982cba8b4cbeb32a439f0367273fc8","Hery Muryanto","10068","7","0","Senior Officer","15","7","KM 597 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10119","10069","530ad673015b98fcf4cdd5a68cb93d6c","Sigit Wahyu Ichtijar","10069","7","0","Senior Officer","13","7","Office","88","4","0","2");
INSERT INTO tabel_role VALUES("10120","10070","1aab7baa714e14868fe9eac65fcbd315","Mulyato","10070","7","0","Senior Officer","15","7","Office","88","4","0","2");
INSERT INTO tabel_role VALUES("10121","10071","4910fcdaedc2be5c5f05533b7a9cb8c2","M. Chairul Anam","10071","7","0","Senior Officer","14","7","KM 519 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10122","10072","cc2b1ba0368ccd98d5bed7e2e97b4bb0","Teddy Arriesandi","10072","7","0","Senior Officer","15","7","44","92","4","0","2");
INSERT INTO tabel_role VALUES("10123","10073","657e31ff3231b847d7604f6647a2dfc9","Aries Askandar","10073","7","0","Senior Officer","7","7","20","88","4","0","2");
INSERT INTO tabel_role VALUES("10124","10074","7e0ff37942c2de60cbcbd27041196ce3","Muhammad Arsyad","10074","7","0","Senior Officer","14","7","KM 519 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10125","10075","2e5050938e0df629a2f2c5ff24fe66c6","Dedy Sutikno","10075","7","0","Senior Officer","14","7","KM 519 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10126","10076","11ed516444b2593eaba7f2c2bb63483e","Edwin Andry Sumala","10076","7","0","Senior Officer","7","7","KM 519 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10127","10077","70803c1acb1ee113c07ec6bddc4929bd","Ismail","10077","7","0","Senior Officer","15","7","Office","88","4","0","2");
INSERT INTO tabel_role VALUES("10128","10078","2754518221cfbc8d25c13a06a4cb8421","Afri Tri Haryono","10078","7","0","Senior Officer","8","7","KM 597 A","103","4","0","2");
INSERT INTO tabel_role VALUES("10129","10079","96e76211d21b66fbdaf1a05498b4417a","Helmi Yunus","10079","7","0","Senior Officer","16","7","KM 64 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10130","10080","ebd774c929a7f6c7e5df19e355f61e23","Andri Munandar","10080","7","0","Senior Officer","21","7","64","180","4","0","2");
INSERT INTO tabel_role VALUES("10131","10081","725215ed82ab6306919b485b81ff9615","Sudarmadi","10081","7","0","Senior Officer","21","7","KM 67 A","13","4","0","2");
INSERT INTO tabel_role VALUES("10132","10082","9b22a40256b079f338827b0ff1f4792b","PRINS HANDOYO","10082","7","0","Senior Officer","21","7","64","88","4","0","2");
INSERT INTO tabel_role VALUES("10133","10083","c5f79d384b8024d5adddb872f9651f38","Bakti Sihombing","10083","7","0","Senior Officer","21","7","KM 67 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10134","10084","c1aff6753244c6ee93d489992b51f012","Julpikar","10084","7","0","Senior Officer","21","7","64","88","4","0","2");
INSERT INTO tabel_role VALUES("10135","10085","5e62c1998206e0110459a6143546fe2e","Rahmatul Aini","10085","7","0","Senior Officer","21","7","64","88","4","0","2");
INSERT INTO tabel_role VALUES("10136","10086","6412121cbb2dc2cb9e460cfee7046be2","Supriadi","10086","7","0","Senior Officer","21","7","64","88","4","0","2");
INSERT INTO tabel_role VALUES("10137","10087","afc2637129ad904485e07d2c0e6b0688","Rahmadi Panjaitan","10087","7","0","Senior Officer","21","7","64","88","4","0","2");
INSERT INTO tabel_role VALUES("10138","10088","42edd1ec1dc5f5c1f11fd74a959e96c9","Aris Widodo","10088","7","0","Senior Officer","17","7","KM 725 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10139","10089","69f8ea31de0c00502b2ae571fbab1f95","Saiful","10089","7","0","Senior Officer","17","7","49","88","4","0","2");
INSERT INTO tabel_role VALUES("10141","10091","b219f59c2dd596abfadbcecfc2277659","IWAN DHANI GUNAWAN","10091","7","0","Senior Officer","11","7","33","88","4","0","2");
INSERT INTO tabel_role VALUES("10142","10092","c0c3a9fb8385d8e03a46adadde9af3bf","BUDI LUKMAN","10092","7","0","Senior Officer","11","7","KM 88 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10143","10093","ee51fce06e2c58e0cac874de44b57035","Dedi Kusnadi","10093","7","0","Senior Officer","11","7","KM 88 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10144","10094","018a1b6ccd2ec81361657e259155895a","Deni Catur Wardani","10094","7","0","Senior Officer","11","7","KM 88 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10145","10095","253d812cbfbb77c03b910f9897e9487d","Asep Sugiri","10095","7","0","Senior Officer","11","7","33","88","4","0","2");
INSERT INTO tabel_role VALUES("10146","10096","ee4117572afbc0cf760f70714af0ec52","Boni Pasius Silalahi","10096","7","0","Senior Officer","11","7","33","88","4","0","2");
INSERT INTO tabel_role VALUES("10147","10097","23b702c4c421ddb2d023fee968c0d839","DADAN KUSNIDAR","10097","7","0","Senior Officer","11","7","KM 88 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10148","10098","c876914f82ce54cb533b186afd41166e","Aa Dedih","10098","7","0","Senior Officer","11","7","KM 88 A","88","4","0","2");
INSERT INTO tabel_role VALUES("10156","PK092","c6f3b2844dbaf9894dd271601421d43c","Arief rachman Eka Putra","PK092","7","0","Senior Officer","14","5","38","68","5","0","2");
INSERT INTO tabel_role VALUES("10158","PK094","3828bedd5250e27b08033fa273cce461","Een Ahmadan Yoga Wilanda","PK094","7","0","Senior Officer","5","6","14","64","5","1","2");
INSERT INTO tabel_role VALUES("10162","PK099","27345d25923b27b503c6bc82a4232684","Rizqa Amalia","PK099","7","0","Senior Officer","5","6","15","63","5","1","2");
INSERT INTO tabel_role VALUES("10165","PK104","167abe53c7adf82af922c36296c1f889","M. Syaiful Rifqi adi Khrisna","PK104","7","0","Senior Officer","5","4","15","70","5","1","2");
INSERT INTO tabel_role VALUES("10166","PK105","5c922c1bf3889a3683229da959290436","Salma Jounarasti Hasniza","PK105","7","0","Senior Officer","3","1","7","36","5","1","2");
INSERT INTO tabel_role VALUES("10169","PK058","624717d9f15d1bf3e5f94d27a1a515b1","Anang Daus Soemartri","PK058","7","0","Senior Officer","3","5","9","43","5","1","2");
INSERT INTO tabel_role VALUES("10170","PK091","e3dd589db435b6414ce32434460cc359","Fauzi Rachman Juang Pribadi","PK091","7","0","Senior Officer","5","4","15","69","5","1","2");
INSERT INTO tabel_role VALUES("10171","PK103","28d3c0d6aeecdd362803440626770f52","Muhammad Nofi Risdianto","PK103","7","0","Senior Officer","5","1","13","68","5","1","2");
INSERT INTO tabel_role VALUES("10032","PK018","5809b0678dc7b34a25b86aa416859b59","Mia Restu Oktavia Sutanty","PK018","8","0","Officer","12","7","48","129","5","0","2");
INSERT INTO tabel_role VALUES("10033","PK019","88d85dfa2eda0c1db1c2b37fbf7bfba8","Rafika Afrianne Ichsan","PK019","8","0","Officer","12","7","KM 207 A","128","5","0","2");
INSERT INTO tabel_role VALUES("10036","PK022","189a008966f509fdd63b7e32738df63c","Julian Dwi Kusuma Lestari","PK022","8","0","Officer","12","7","48","132","5","0","2");
INSERT INTO tabel_role VALUES("10038","PK024","59332b589a064382226ec34492419cba","Riyen Haryani","PK024","8","0","Officer","2","6","3","30","5","1","2");
INSERT INTO tabel_role VALUES("10039","PK025","b07128152c5ecdf73181148efb673d41","Risma Nurjannah","PK025","8","0","Officer","19","7","55","116","5","1","2");
INSERT INTO tabel_role VALUES("10041","PK028","bfb3852b4814d2e61598f2ad07d46298","Kevin Dwiagy Emerald","PK028","8","0","Officer","19","2","57","124","5","0","2");
INSERT INTO tabel_role VALUES("10043","PK030","8393df7e9ec7bd6f46cc2662095b147a","Resy Alifianti Suprapto","PK030","8","0","Officer","5","5","14","65","5","1","2");
INSERT INTO tabel_role VALUES("10046","PK033","14c96390890cda796ba8a0100f647a4f","Saipul Anwar","PK033","8","0","Officer","11","5","33","91","5","0","2");
INSERT INTO tabel_role VALUES("10047","PK034","1872f655b7c18c6774a606268f9e8397","Muhamad Nur Baedi","PK034","8","0","Officer","12","7","KM 207 A","130","5","0","2");
INSERT INTO tabel_role VALUES("10049","PK036","7cc3666509e65e7209d2517003c984d9","Siti Rosmayanti","PK036","8","0","Officer","2","6","3","29","5","1","2");
INSERT INTO tabel_role VALUES("10050","PK037","5eb0614e5a420717938116ce87e358fd","Maylisa Marsita Anggreina Siahaya","PK037","8","0","Officer","2","6","3","20","5","1","2");
INSERT INTO tabel_role VALUES("10052","PK039","934e01f1ff02e5797dcdf3d387ab25b7","Eko Prabowo","PK039","8","0","Officer","7","5","20","72","5","0","2");
INSERT INTO tabel_role VALUES("10067","PK055","64fe947dde7170229d95af90ad6d9b68","Ayu Ratnasari","PK055","8","0","Officer","5","5","13","72","5","1","2");
INSERT INTO tabel_role VALUES("10068","PK056","6ca4d82fbd86555624995d113fde3833","Dicky Wahyu Pratama","PK056","8","0","Officer","11","7","33","89","5","0","2");
INSERT INTO tabel_role VALUES("10079","PK070","dc8734f7a1b8c973d64b78ca4d0b1121","Wega Tommy Dwi Pamungkas","PK070","8","0","Officer","16","4","KM 64 A","72","5","0","2");
INSERT INTO tabel_role VALUES("10080","PK071","ab47cbbc8714426e14ac62e2b8a8e81d","Nur Fitria Febriana","PK071","8","0","Officer","5","6","14","65","5","1","2");
INSERT INTO tabel_role VALUES("10085","PK076","856adc13bd0c5999ed10315e300e76e3","Andi Afriansyah","PK076","8","0","Officer","10","7","DEPARTEMENT BUSINESS DEVELOPMENT","78","5","0","2");
INSERT INTO tabel_role VALUES("10091","PK084","3cfab66abaf1adf0e948a6e53c599410","Tania Intan Sari","PK084","8","0","Officer","4","4","10","47","5","1","2");
INSERT INTO tabel_role VALUES("10097","PK087","1d6fb7061bf8375a0317ff6cce6ee59f","Muhammad Rizaq Nuriz Zaman","PK087","8","0","Officer","7","5","20","157","5","0","2");
INSERT INTO tabel_role VALUES("10100","PK095","ed3230f53e8c255c8d2a29c3e04a559f","Sabila Adinda Puri Andarini","PK095","8","0","Officer","19","2","55","115","5","1","2");
INSERT INTO tabel_role VALUES("10140","10090","4392e631da381761421d5e1e0c3de25f","Hery Wahyu Noertjahyo","10090","8","0","Officer","17","7","49","91","4","0","2");
INSERT INTO tabel_role VALUES("10155","PK090","8e5878685b9379cb425d54b9c52e0239","Sofyan Wahyudi","PK090","8","0","Officer","5","5","13","64","1","1","2");
INSERT INTO tabel_role VALUES("10160","PK097","fd788805739e13e3a728781093a5af22","Inggrid Vio Fernanda","PK097","8","0","Officer","5","5","13","64","5","1","2");
INSERT INTO tabel_role VALUES("10163","PK100","228b37d4d7094a73064949d8b1837970","Nur Agus Rachmawan","PK100","8","0","Officer","5","5","13","64","5","1","2");
INSERT INTO tabel_role VALUES("10164","PK101","912eb7a48fadd35dac3d1bddc128bd16","Swanti","PK101","8","0","Officer","5","6","15","64","5","1","2");
INSERT INTO tabel_role VALUES("10167","PK106","29a4d75a5d500aa76dbae56082a17c76","Yuni Nurmaya","PK106","8","0","Officer","5","6","13","65","5","1","2");
INSERT INTO tabel_role VALUES("10168","PK107","6234e45cf0a69c9846ccf2df739b89db","Hasan Mauludi","PK107","8","0","Officer","5","5","13","65","4","1","2");
INSERT INTO tabel_role VALUES("10152","K0005","a29e39366bc75d66b57f8e2536fe9312","Donny Arsal","K0005","10","0","Komisaris","0","1","0","1","1","1","1");
INSERT INTO tabel_role VALUES("10","10007","9cdf26568d166bc6793ef8da5afa0846","R.A. Ayu Suzanne P","10007","11","0","Specialist","4","4","SEKSI PROPERTY ENGINEERING & MAINTENANCE","49","4","1","2");
INSERT INTO tabel_role VALUES("10101","10047","eccd9f7dc92858b741132fda313130cf","Yati Melasari","10047","11","0","Specialist","19","2","55","109","3","1","1");



DROP TABLE tabel_surat;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_surat` AS select `tbl_surat_masuk`.`id_surat` AS `id_surat`,`tbl_surat_masuk`.`no_agenda` AS `no_agenda`,`tbl_surat_masuk`.`asal_surat` AS `asal_surat`,`tbl_surat_masuk`.`isi` AS `isi`,`tbl_surat_masuk`.`tgl_surat` AS `tgl_surat`,`tbl_surat_masuk`.`tgl_diterima` AS `tgl_diterima`,`tbl_surat_masuk`.`file` AS `file`,`tbl_surat_masuk`.`keterangan` AS `keterangan`,`tbl_user`.`nama` AS `nama`,`tbl_surat_masuk`.`id_user` AS `id_user`,`tbl_surat_masuk`.`tujuan` AS `tujuan`,`tbl_user`.`nip` AS `nip`,`tbl_role`.`role` AS `role`,`tbl_surat_masuk`.`baca` AS `baca`,`tbl_surat_masuk`.`kode` AS `kode`,`tbl_surat_masuk`.`status` AS `status` from ((`tbl_surat_masuk` join `tbl_user` on((`tbl_surat_masuk`.`id_user` = `tbl_user`.`id_user`))) join `tbl_role` on((`tbl_user`.`admin` = `tbl_role`.`admin`)));




DROP TABLE tabel_surat_keluar;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tabel_surat_keluar` AS select `tbl_surat_keluar`.`id_surat` AS `id_surat`,`tbl_surat_keluar`.`no_agenda` AS `no_agenda`,`tbl_surat_keluar`.`tujuan` AS `tujuan`,`tbl_surat_keluar`.`no_surat` AS `no_surat`,`tbl_surat_keluar`.`isi` AS `isi`,`tbl_surat_keluar`.`kode` AS `kode`,`tbl_surat_keluar`.`tgl_surat` AS `tgl_surat`,`tbl_surat_keluar`.`tgl_catat` AS `tgl_catat`,`tbl_surat_keluar`.`file` AS `file`,`tbl_surat_keluar`.`keterangan` AS `keterangan`,`tbl_surat_keluar`.`id_user` AS `id_user`,`tbl_user`.`nama` AS `nama`,`tbl_role`.`admin` AS `admin`,`tbl_surat_keluar`.`dari` AS `dari`,`tbl_surat_keluar`.`status` AS `status` from ((`tbl_surat_keluar` join `tbl_user` on((`tbl_surat_keluar`.`id_user` = `tbl_user`.`id_user`))) join `tbl_role` on((`tbl_user`.`admin` = `tbl_role`.`admin`)));




DROP TABLE tbl_berita;

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `berita` varchar(255) NOT NULL,
  `tgl_akhir` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tbl_berita VALUES("1","UKB akan dilaksanakan pada tanggal 26 November 2018 - 29 November 2018","2018-11-29");
INSERT INTO tbl_berita VALUES("2","Aplikasi Tenancy Management Masih dalam Pembangunan","2018-12-01");



DROP TABLE tbl_bulan_gaji;

CREATE TABLE `tbl_bulan_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` date NOT NULL,
  `status` int(25) NOT NULL,
  `status_proses` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tbl_bulan_gaji VALUES("3","2018-10-18","0","0");
INSERT INTO tbl_bulan_gaji VALUES("5","2018-11-25","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tbl_cuti VALUES("1","10006","Tour Direktorat Divisi Keuangan","2018-09-21","2018-09-21","1","1","Sri Rejeki Handayani","3","1","");
INSERT INTO tbl_cuti VALUES("2","10040","Tour Direktorat Divisi Keuangan","2018-09-21","2018-09-21","1","0","Gatri Ayuning Lestari","0","0","");
INSERT INTO tbl_cuti VALUES("3","10027","Tour Direktorat Divisi Keuangan","2018-09-21","2018-09-21","1","1","Herdwin Nofrian","3","1","");
INSERT INTO tbl_cuti VALUES("4","10037","Tour Direktorat Divisi Keuangan","2018-09-21","2018-09-21","1","1","Widyadji Sasono","0","1","");
INSERT INTO tbl_cuti VALUES("5","10012","Acara Keluarga","2018-10-11","2018-10-13","1","0","Sumarmi","2","0","");
INSERT INTO tbl_cuti VALUES("6","10012","dsadsadas","2018-12-12","2018-12-20","1","0","Sumarmi","2","1","");



DROP TABLE tbl_department;

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `kode_unit` int(25) DEFAULT NULL,
  `kode` int(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_unit` (`kode_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO tbl_file_sharing VALUES("44","10012","77-BIRD-VIEW-AREA-KOMERSIAL-HOTEL-WATERPARK-1.jpg","2","0");
INSERT INTO tbl_file_sharing VALUES("48","10012","36-hosts","2","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gaji VALUES("242","5","10025","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("243","5","10012","","20425317","927309","161880","0","849073","0","1335816","242820","0","849073","0","1","0","0","13438262","5087281","8350981");
INSERT INTO tbl_gaji VALUES("252","5","6","","0","794500","161880","320000","1676224","0","0","242820","400000","1676224","0","0","0","0","20452604","2319044","18133560");
INSERT INTO tbl_gaji VALUES("253","5","4","","0","263320","116000","232000","83724","0","379320","174000","290000","83515","0","1","0","0","6495044","1004935","5490109");
INSERT INTO tbl_gaji VALUES("254","5","10","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","11500000","0","0");
INSERT INTO tbl_gaji VALUES("255","5","10013","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("256","5","7","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("257","5","10003","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("258","5","10011","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("259","5","10002","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("260","5","10010","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("261","5","2","","0","263320","116000","232000","83724","0","379320","174000","290000","83515","0","0","0","0","6495044","926835","5568209");
INSERT INTO tbl_gaji VALUES("262","5","1","","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0");
INSERT INTO tbl_gaji VALUES("263","5","10027","","0","0","0","0","-256579","0","0","0","0","-243750","-12188","0","0","0","-256579","-255938","0");
INSERT INTO tbl_gaji VALUES("264","5","10101","","0","499400","220000","440000","754174","0","0","330000","550000","641048","107470","0","0","0","12913574","1628518","0");
INSERT INTO tbl_gaji VALUES("265","5","10075","","0","263320","116000","232000","24513","0","379320","174000","290000","24452","0","0","0","0","6435833","867772","5568061");
INSERT INTO tbl_gaji VALUES("266","5","10008","","0","794500","161880","320000","1742400","0","0","242820","400000","1742400","0","0","0","0","20518780","2385220","18133560");



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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gaji_pokok VALUES("1","1","22277700","1","1","0","0","2000000","0","0","2000000");
INSERT INTO tbl_gaji_pokok VALUES("2","2","49506000","2","2","10300000","0","0","0","10000000","1500000");
INSERT INTO tbl_gaji_pokok VALUES("3","3","42080100","2","1","9270000","0","0","0","10000000","1500000");
INSERT INTO tbl_gaji_pokok VALUES("4","4","12500000","3","1","5000000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("5","6","9000000","3","1","2500000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("6","6","8500000","5","2","2500000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("7","8","7000000","3","1","0","1500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("8","8","6500000","5","2","0","1500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("9","9","5800000","4","2","0","500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("10","9","5300000","5","2","0","500000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("11","10","4300000","5","2","0","350000","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("12","6","9000000","4","2","2500000","0","0","0","0","0");
INSERT INTO tbl_gaji_pokok VALUES("15","7","9000000","3","1","2000000","0","0","0","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;

INSERT INTO tbl_identitas VALUES("5","10012","1986-04-01","","P","Nganjuk","1965-08-30","25","1","AB","Jl. Bawang III No. 70 RT.04 RW.03","Cibodasari","Cibodas","Tangerang","Banten","0","021-5511093","","4902-bopak.jpg","5846-Abot.jpg","597-Acas.jpg","5496-anang.jpg","2081-Akoeng.jpg","123124124","477980536402000","86J82012724","86J82012724","1290006068916","Sumarmi","1","0","1","20425317");
INSERT INTO tbl_identitas VALUES("6","4","2018-03-05","","L","","1995-01-16","33","1","A","asd","","","","","0","","","","","","","","","12341234","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("7","6","2017-03-10","","L","","1968-09-19","25","1","A"," JL.KRAKATAU IV D21/14 RT08/05 ","PONDOK MELATI ","JATIWARNA"," BEKASI ","JAWA BARAT","0","","","","","","","","","478008121444000","","91J82012476","1290004420580","SUMARSONO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("8","10008","2016-12-01","","L","Medan","1975-05-22","24","1","A","KOMPLEK BINA MARGA NO.2 RT.001/05","KEL. CIPAYUNG","KEC. CIPAYUNG","JAKARTA TIMUR","JAKARTA","0","081267006800","","3229-angga.jpg","7578-ardiansyah.jpg","","","","3175102205750005","674580436015000","","04J80183678","1290010522536","DONY IKHWAN","1","0","0","0");
INSERT INTO tbl_identitas VALUES("9","10006","0000-00-00","","P","","0000-00-00","22","1","A","Asd","","","","","0","","","","","","","","","","","","","","","0","0","0");
INSERT INTO tbl_identitas VALUES("10","2","0000-00-00","","P","","1988-04-05","11","1","A","A","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("11","10013","2018-01-02","","L","","1976-06-24","25","3","A","A","","","","","0","","","","","","","","","689477818411000","","94J82324297","1640000462897","EDMUNDUS EDY PANCANINGTYAS","1","0","0","0");
INSERT INTO tbl_identitas VALUES("12","10093","1988-09-17","","L","Jakarta","1969-09-08","25","1","A","RT 03 RW 11 No. 38A","Jatiwaringin","Pondok Gede","Bekasi","Jawa Barat","17411","085697180073, 0221","","9532-03_2018Penugasan Karyawan-budi.docx","","","","","","142073774407000","88J82012498","88J82012498","9000025219792","Slamet Purwanto","1","0","0","0");
INSERT INTO tbl_identitas VALUES("13","10027","2016-09-13","","L","Jakarta","1989-02-16","23","1","A","KOMP.CHANDRA INDAH BLOK C-48 RT. 001/015","KEL.JATIRAHAYU","KEC.PONDOK MELATI","BEKASI","JAWA BARAT","0","081296999697","","","","","","","3275121602890002","442007456432.000","","3275121602890002","1240005837886","HERDWIN NOFRIAN","1","0","0","0");
INSERT INTO tbl_identitas VALUES("14","10010","2017-03-10","","L","Jakarta","1987-09-09","24","1","A","Pondok Pekayon Indah Blok DD 15/25","Pekayon Jaya","Bekasi Selatan","Bekasi ","Jawa Barat","0","081315947070","","","","","","","","590974945432000","","10021654800","0060004531327","IMAD ZAKY MUBARAK","1","1","0","0");
INSERT INTO tbl_identitas VALUES("15","7","2013-02-25","","L","GRESIK","1987-05-23","23","1","A","JL. VENUS TIMUR VII NO. 17 RT. 02/01","KEL. MANJAH LEGA","KEC. RANCA SARI","BANDUNG","JAWA BARAT","40286","022.7562026","","","","","","","3273232305870002","794874487429000","","09022867106","1300010168337","Hubby Ramdhani","1","0","0","0");
INSERT INTO tbl_identitas VALUES("16","7","2013-02-25","","L","GRESIK","1987-05-23","23","1","A","JL. VENUS TIMUR VII NO. 17 RT. 02/01","KEL. MANJAH LEGA","KEC. RANCA SARI","BANDUNG","JAWA BARAT","40286","022.7562026","","","","","","","3273232305870002","794874487429000","","09022867106","1300010168337","Hubby Ramdhani","1","0","0","0");
INSERT INTO tbl_identitas VALUES("17","10025","2015-06-12","","L","PEKANBARU","1970-09-26","24","1","A","J. DARMAWANGSA X/24  RT. 002/001","KEL. CIPETE UTARA","KEC. KEBAYORAN BARU ","JAKARTA SELATAN","JAKARTA","0","","","","","","","","3174072609700003","067800607019000","","15036665725","1560007351564","IRWAN ARTIGYO SUMADIYO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("18","10063","2016-03-04","","L","TASIK MALAYA","1982-01-17","24","1","A","JL.RAYA PASAR MINGGU, Gg.SOSIAL NO.26 RT.011/001","KEL.PASAR MINGGU","KEC. PASAR MINGGU","JAKARTA SELATAN","JAKARTA","0","","","","","","","","3276021701820001","761687433017000","","13035229692","1240007135925","RIZALULLOH","1","0","0","0");
INSERT INTO tbl_identitas VALUES("19","10015","2018-02-01","","P","Jakarta","1968-04-27","25","1","A","Jl. Kemanggisan Pulo RT003 RW017","Palmerah","Palmerah","JAkarta Barat","Jakarta","0","","","","","","","","","472116144031000","0001629136045","98J82035076","1290010688832","KATNI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("20","10040","2016-07-11","","P","Jakarta","1992-09-19","22","1","A","Pondok Mitra Lestari C9 NO. 16 RT.10/13 ","Kel. Jati Rasa","Kec. Jati Asih","Bekasi","Jawa Barat","17424","081908170390","","","","","","","3275095909920007","710290065432000","","14021840526","1670000095645","GATRI AYUNING LESTARI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("21","10037","2016-05-01","","L","JAKARTA","1987-12-29","33","1","A","KOMP. AD. BULAK RANTAI G. 39 RT. 003/005","KEL. TENGAH","KEC. KRAMAT JATI","JAKARTA TIMUR","JAKARTA","0","08138363999","","","","","","","3175042912870004","0000728125337009000","","16029287683","1290009921723","WIDYADJI SASONO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("22","10026","0000-00-00","","L","","0000-00-00","23","1","A","dsa","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("23","10081","2018-04-03","","L","","1987-12-13","24","1","A","f","","","","","0","","","","","","","","","872083258017000","17034241459","17034241459","1270009788959","MOHAMAD REZA PAHLEVI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("24","10082","2016-11-01","","L","JAKARTA","1970-05-26","24","1","A","JL.PERDATAM VII NO.3 RT.010/005","KEL.ULUJAMI","KEC.PESANGGRAHAN","Jakarta Selatan","Jakarta","0","","","","","","","","3174072605700001","170535215012000","","","1030006291765","VISHNU DAMAR SASONGKO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("25","10003","2016-04-11","","P","YOGYAKARTA","1985-05-18","22","1","A","JL. H. MANDOR II CILANDAK RT. 016/002","KEL. CILANDAK BARAT","KEC. CILANDAK","JAKARTA SELATAN","JAKARTA","0","082112222050","","","","","","","3174065805850005","876198326016000","","120237877860","1160006041603","META HERLINA PUSPITANINGTYAS","1","0","0","0");
INSERT INTO tbl_identitas VALUES("26","9","2013-03-01","","L","TANGERANG","1964-12-31","24","1","A","BINONG PERMAI C-4/26 RT.002/011","DESA BINONG","KEC. CURUG","TANGERANG","Banten","0","","","","","","","","3603173112640003","595822586451000","","85J82011447","1550003157701","UCI SANUSI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("27","10001","2016-01-01","","L","BANDUNG","1971-07-14","24","1","A","GRIYA CEMPAKA ARUM BLOK B NO. 168 RT. 004/004","KEL WANASABA LOR","KEC. TALUN","CIREBON","JAWA BARAT","0","","","","","","","","3209141407710002","471079681426000","","91J82014662","9000001424275","IRWANSYAH RINALDHI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("28","10004","2016-04-11","","P","YOGYAKARTA","1987-05-15","23","1","A","GG. UJUNG ASPAL JL. TRANS AD JATISAMPURNA","","","BEKASI","JAWA BARAT","0","082136833641","","","","","","","","351176474542000","","12023787471","1290009984960","MARLINA RIRIN INDRIYANI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("29","10005","2016-05-09","","L","SUBANG","1966-11-23","25","1","A","JL. GRADIUL NO. 55 RT. 008/006","KEL. RANCAEKEK KENCANA","KEC. RANCAEKEK","BANDUNG","JAWA BARAT","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("30","10007","2016-12-01","","P","MEDAN","1967-03-13","24","2","A","JL. RAWABOLA NO.1  RT.002/007","KEL. KELAPA DUA WETAN","KEC. CIRACAS","JAKARTA TIMUR","JAKARTA","0","08129494633","","","","","","","3175105303670006","478004997005000","","89J82009724","1290009726692","HANNA FARIDA TAMPUBOLON","1","0","0","0");
INSERT INTO tbl_identitas VALUES("31","10011","2017-07-01","","P","Jakarta","1992-10-21","32","1","A"," JL. H. Hasan I No 60 RT.001./001 ","Kel. Baru","Kec. Pasar Rebo ","Jakarta Timur","Jakarta","0","","","","","","","","","717305544009000","","15022385262","15022385262","TRIA OKTAVIANI","3","0","0","0");
INSERT INTO tbl_identitas VALUES("32","10014","2018-01-02","","L","","0000-00-00","24","1","A","asdd","","","","","0","","","","","","","","","47.108.074.7-426.000","","98J82031646000","1340013421366","IRWAN ZAINI LUTHFI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("33","10023","2018-04-09","","L","","1987-10-26","24","1","A","dsa","","","","","0","","","","","","","","","450975032417000","","","1290009982782","ADE GUSTIKA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("34","10","2015-04-15","","P","Bandung","1970-04-01","25","1","A","JL. KAVALERI BLOK G.30, KPAD JATIWARINGIN RT. 05/06","KEL. CIPINANG MELAYU","KEC. MAKASAR","JAKARTA TIMUR","JAKARTA","13620","0818123462","","","","","","","3175084104700002","570216853005000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("35","10058","2016-05-01","","L","BOGOR ","1982-08-17","33","1","A","MAYOR OKING JAYA ATMAJA NO. 52 RT.002/001","KEL. CITEUREUP","KEC.CITEUREUP","BOGOR","JAWA BARAT","0","","","","","","","","3201031708820021","972218986436000","","16029287667","1730001747246","RIZAL KAMARUZZAMAN","1","0","0","0");
INSERT INTO tbl_identitas VALUES("36","10002","2016-01-01","","L","Kuningan","1974-05-24","24","1","A","PERMATA HARJAMUKTI BLOK L 7 NO. 4 RT. 009/016","KEL. KECAPI","KEC. HARJAMUKTI","CIREBON","JAWA BARAT","0","","","","","","","","3274032405740010","471079939438000","","93J80110443","1340098001299","DEDE AHMAD NURHADI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("37","10052","0000-00-00","","L","JAKARTA","1975-05-31","23","1","A","KOMP.UNILEVER A-","","","","","0","","","","","","","","367405310575","123","123","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("38","10075","0000-00-00","","L","","0000-00-00","24","1","A","dsa","","","","","0","","","","","","","","","aasd","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("39","10101","0000-00-00","","P","","0000-00-00","13","1","A","123","","","","","0","","","","","","","","","123","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("40","10103","2018-10-01","","L","KUNINGAN","1974-03-11","25","1","A","DUSUN LEBAK WANGI RT002RW002","MEKARJAYA","PANCALANG","KUNINGAN ","JAWA BARAT","0","","","","","","","","3210181103740001","3208221605120002","0001628582567","0001628582567","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("41","10104","2018-10-01","","L","","1971-05-24","25","1","A","PURI CIREBON LESTARI BLOK F1 NO 9 RT01RW07","KECOMBERAN","TALUN","CIREBON","JAWA BARAT","0","","","2311-ktp_ujang.jpg","1392-UJANG_Page_4.jpg","2952-UJANG_Page_3.jpg","376-BPJS UJANG.jpg","9995-BPJS UJANG.jpg","3209142402100007","595801481404000","0001632622814","0001632622814","1340013533475","Ujang","1","0","0","0");
INSERT INTO tbl_identitas VALUES("42","10105","2018-10-01","","L","CIREBON","1973-09-08","33","1","A","BUKEPIN II BLOK D2 NO 12 RT03 RW06","KEPONGPONGAN","TALUN","CIREBON","JAWA BARAT","0","","","","","","","","3209140809730005","\'3209140610080136","0001628576807","0001628576807","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("43","10106","2018-10-01","","L","SURABAYA","1972-11-05","24","1","A","PERMATA HARJAMUKTI III D6 NO 11 RT05 RW14","Kali Jaga","HARJAMUKTI","CIREBON","JAWA BARAT","0","","","","","","","","","3274031107070021","0001628580137","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("44","10107","0000-00-00","","L","MALANG","1970-08-22","24","1","A","JL NGAGLIK IV-B / 51 RT01 RW 09","SUKUN","SUKUN","MALANG","JAWA TIMUR","0","","","","","","","","3573042208700006","3573041908080030","0001629575717","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("45","10102","2018-10-01","","L","KUNINGAN","1976-04-20","25","1","A","DUSUN 03 KARANG ANYAR RT03 RW05","GUMULUNG LEBAK","Greged","","","0","","","","","","","","3209382004760003","3209381411080001","0000067803772","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("46","10108","0000-00-00","","L","MALANG","1970-06-04","23","1","A","PERUM GOR RAGIL REGENCY BLOK D-12A RT05  RW01","WONOKOYO","Kedung kandang","MALANG","JAWA TIMUR","0","","","","","","","","3514092706700001","3573031912120008","0001629576606","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("47","10110","0000-00-00","","L","Jakarta","1976-06-13","24","1","A","BLOK KR JAMBE KIDUL RT11 RW05","Pekantingan","Klangenan","Cirebon","JAWA BARAT","0","","","","","","","","3209231306760011","3209232502090025","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("48","10109","2018-11-01","","L","Jakarta","1977-04-25","25","1","A","JL WIDARASARI I NO 07 RT01 RW03","SUTAWINANGUN","KEDAWUNG","cirebon","JAWA BARAT","0","","","","","","","","3209202504770003","3209202202100007","0001628578541","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("49","10111","2018-11-01","","L","CIREBON","1977-04-02","24","1","A","BLOK KAUM RT03 RW01","CANGKRING","PLERED","CIREBON","JAWA BARAT","0","","","","","","","","3209360204770002","3209362904080019","0001628579452","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("50","10112","2018-11-01","","L","BATANG","1970-07-09","24","1","A","DK KECUBUNG DS GONDANG RT06 RW02","GONDANG","SUBAH","BATANG","JAWA TENGAH","0","","","","","","","","3325090907700001","3325092702071139","0001629422919","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("51","10113","2018-11-01","","P","Jakarta","1976-09-15","33","1","A","TAMAN BIMA PERMAI BLOK B7  RT01 RW09","TUK","KEDAWUNG","CIREBON","JAWA BARAT","0","","","","","","","","3209205509760002","3209202302062184","0001628578653","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("52","10114","2018-11-01","","L","BANDUNG","1970-06-16","24","1","A","JL SUKAGALIH RT03 RW04","SUKABUNGAH","SUKAJADI","BANDUNG","JAWA BARAT","0","","","","","","","","3273071606700010","3273072912140008","0001632636527","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("53","10115","2018-11-01","","L","Solo","1971-06-03","25","1","A","PERUM DINAR MAS UTARA I/68 RT01 RW19","METESEH","TEMBALANG","SEMARANG","JAWA TENGAH","0","","","","","","","","3374110306710005","3374111212051766","0001628613516","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("54","10116","2018-11-01","","L","TUBAN","1968-12-31","24","1","A","JL. PARIKESIT RAYA RT10 RW02","BANYUMANIK","BANYUMANIK","Semarang","JAWA TENGAH","0","","","","","","","","3374113112680014","3374111212050485","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("55","10117","2018-11-01","","L","Pematang Siantar","1976-01-12","24","1","A","P4A BLOK F-123 JL GAMBYONG V RT07 RW011","PUDAKPAYUNG","BANYUMANIK","","","0","","","","","","","","3374111201760009","3374112605080023","0001628615373","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("56","10118","0000-00-00","","L","Tegal","1975-07-03","25","1","A","JL. RA KARTINI RT01 RW08","Slawi Kulon","SLAWI","TEGAL","JAWA TENGAH","0","","","","","","","","3328100307750004","3328102402081049","0001628615777","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("57","10119","2018-11-01","","L","BLORA","1972-06-13","25","1","A","GEDAWANG PERMAI BLOK E-4 RT03 RW04","GEDAWANG","BANYUMANIK","SEMARANG","JAWA TENGAH","0","","","","","","","","3374081306720002","3374111212054229","0001629423966","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("58","10120","2018-11-01","","L","Wonogiri","1976-03-30","24","1","A","BTN POLRI BLOK H NO 19 RT03 RW06","CEMPAKA","PLUMBON","CIREBON","JAWA BARAT","0","","","","","","","","3209183103760002","3374111212054229","0001628577876","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("59","10122","2018-11-01","","L","CIREBON","1973-02-14","25","1","A","JL SENA 3 BLOK H NO 1 BIMA PERMAI RT04 RW06","TUK","KEDAWUNG","Cirebon","JAWA BARAT","0","","","","","","","","3209201402730003","3209201603090006","0001628578438","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("60","10123","0000-00-00","","L","CIREBON","1977-04-19","25","1","A","BLOK KUSUMA INDAH GG APEL NO 77 RT10 RW04","SETU KULON","WERU","Cirebon","JAWA BARAT","0","","","","","","","","3209191904770003","3209190810070253","0001628577977","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("61","10124","2018-11-01","","L","Medan","1972-08-30","25","1","A","JL KATULAMPA RT01 RW09","KATULAMPA","BOGOR TIMUR","BOGOR","JAWA BARAT","0","","","","","","","","1271183008720001","3271020809160007","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("62","10150","2018-08-13","","P","","1964-07-17","24","3","A","Jl. Bangun Cipta I Blok D-12 RT002 RW006","Dukuh","Kramat Jati","Jakarta Timur","Jakarta","0","","","","","","","","3175045707640003","478008485005000","","","1290001085485","IR. TITA PAULINA PURBASARI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("63","10151","2018-10-02","","L","","1969-09-10","23","1","A","asdasdasd","","","","","0","","","","","","","","","170318943016000","","","1650000812710","DIAN TAKDIR BADRSYAH","1","0","0","0");
INSERT INTO tbl_identitas VALUES("64","10031","2015-08-18","","L","BANDUNG","1965-04-21","24","1","A","KP. NYALINDUNG RT. 002/009","KEL. SUKARAJA","KEC. SUKARAJA","SUKABUMI","JAWA BARAT","0","085759946093","","","","","","","3202332104650002","577267164405000","","12017031233","1290011061823","HANDA RUDITA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("65","10149","2018-10-01","","L","Bandung","0000-00-00","24","1","A","Jl Kiara Sari Permai IV no 3 Komp Kiara Sari Bandung rt04 RT04 RW01","Marga Sari","Buah Batu","Bandung","JAWA BARAT","0","","","","","","","","","271570442429000","91J82014324000","91J82014324000","0513200003443","RONI YUSNANDAR","5","0","0","0");
INSERT INTO tbl_identitas VALUES("66","10092","2018-04-17","","P","Menado","1972-12-02","13","3","A","Perum BCI Blok A3 No.9 RT004 RW026","Sukatani","Tapos","Depok","Jawa Barat","0","","","","","","","","","383123429005000","94J82323422","94J82323422","0060005199579","KRISTIANA LIVE SONYA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("67","10094","2018-07-01","","P","","1992-10-04","33","1","A","jkt","","","","","0","","","","","","","","","718385875521000","","15022384877","1390016250635","INDRI KURNIA LESTARI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("68","10028","2016-12-01","","L","","1958-06-29","23","1","A","bekasi","","","","","0","","","","","","","","","478007974407000","","","094846736","ANANG DAUS SOEMANTRI","4","0","0","0");
INSERT INTO tbl_identitas VALUES("69","10125","2018-11-01","","L","Jakarta","1979-04-11","24","1","A","DUSUN IV RT019 RW07","CISAAT","DUKUPUNTANG","CIREBON","JAWA BARAT","0","","","","","","","","3209231104790008","3209161506150009","0001628579215","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("70","10126","2018-11-01","","L","Jakarta","1978-06-11","23","1","A","DUSUN MANIS RT20 RW 01","CIKASO","KRAMATMULYA","CIREBON","JAWA BARAT","0","","","","","","","","3208161106780001","3208160504070001","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("71","10127","2018-10-01","","L","Trenggalek","1971-02-11","25","1","A","KOMP GPA JL DADALI D4 NO 9 RT05 RW13","BOJONGMALAKA","BALEENDAH","BANDUNG","JAWA BARAT","0","","","","","","","","3204321102710001","3204321210120125","0001632623152","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("72","10128","2018-10-01","","L","Bogor","0000-00-00","33","1","A","JL DIENG DN-29 KEPUH PERMAI RT02 RW04","KEPUH KIRIMAN","KEPUH KIRIMAN","Sidoarjo","JAWA TIMUR","0","","","","","","","","3515180904700002","3515183001092458","0001633851718","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("73","10129","2018-10-01","","L","Banyuwangi","1973-12-22","33","1","A","PERUM KODIM DUSUN KRAJAN RT07 RW04","JUBUNG","SUKORAMBI","Jember","JAWA TIMUR","0","","","","","","","","3509152212730001","3509152409056217","0001629925615","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("74","10130","2018-10-01","","L","Medan","1972-05-19","25","1","A","Jl Marelan V no 11A Lingk-15","Rengas Pulau","Medan Marelan","Medan","SUMATRA UTARA","0","","","","","","","","1271121905720001","1271122306050017","0001638083913","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("75","10131","0000-00-00","","L","Medan","1967-05-21","25","1","A","JL STELLA-III/I NO 4 LK-XIII MEDAN","SIMPANG SELAYANG","MEDAN TUNTUNGAN","Medan","SUMATRA UTARA","0","","","","","","","","1271072105670001","1271072211060012","0001634459567","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("76","10132","0000-00-00","","L","Medan","1968-12-19","25","1","A","JL M A SELATAN GG BUANA NO 30 A-14 A","SUKARAMAI I","MEDAN AREA","Medan","SUMATRA UTARA","0","","","","","","","","1271101912680002","1271101704060016","0001634457317","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("77","10133","2018-10-01","","L","Sigodang-godang","1976-04-10","24","1","A","JL JERMAL X NO A 1","DENAI","MEDAN DENAI","Deli Serdang","SUMATRA UTARA","0","","","","","","","","1271201004780002","1271201206070032","0001634460153","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("78","10134","0000-00-00","","L","Aek Nagaga","1973-06-11","24","1","A","DUSUN IV GANG LANGGAR RT06 RW02","TEMBUNG","PERCUT SEI TUAN","Deli Serdang","SUMATRA UTARA","0","","","","","","","","1271106707670007","1271201206070032","0001634457295","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("79","10135","0000-00-00","","L","Natal","1967-07-27","33","1","A","JL AR HAKIM GG KOLAM NO 80","","MEDAN AREA","Medan","SUMATRA UTARA","0","","","","","","","","1271106707670000","1271102212050014","0001634457295","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("80","10136","2018-10-01","","L","Sibaro","1969-09-05","25","1","A","JL SWADAYA PASAR II TIMUR NO 3 LK 23","RENGAS PULAU","MEDAN MARELAN","Medan","SUMATRA UTARA","0","","","","","","","","12711067076700001271060509690005","1271120905140010","0001633579874","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("81","10137","0000-00-00","","L","Medan","1969-02-14","26","1","A","DUSUN III KOMP PRUMDAM I/BB NO 76","PATUMBAK KAMPUNG","PATUMBAK","Deli Serdang","","0","","","","","","","","1207211402690003","1207211509096126","0001634458162","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("82","10138","2018-10-01","","L","Surabaya","1969-04-01","23","1","A","DK Jerawat RT01 RW03 ","Pakal","Babat Jerawat","Surabaya","Jawa Timur","0","","","","","","","","3216060104690033","3578301610130002","0001629569744","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("83","10139","2018-10-01","","L","Mojokerto","1971-12-02","25","1","A","JALAN CINDHE BARU II LINGK CINDE RT03 RW01","PRAJURIT KULON","PRAJURIT KULON","Mojokerto","Jawa Timur","0","","","","","","","","3576010212710004","3576011511082522","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("84","10140","2018-10-01","","L","Mojokerto","1971-08-04","23","1","A","JL BOLA VOLLY BB/02 JAPAN RAYA RT06 RW12","JAPAN","SOOKO","Mojokerto","Jawa Timur","0","","","","","","","","3516130408710006","3516131903040189","0001629569935","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("85","10141","2018-10-01","","L","Bogor","1967-10-29","25","1","A","GRIYA CIWANGI P6 NO 9 RT47 RW 9","CIWANGI","BUNGURSARI","BOGOR","JAWA BARAT","0","","","","","","","","3214132910670002","000000000000000","0001628583028","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("86","10142","2018-10-01","","L","Bandung","1969-05-24","25","1","A","KP KIARA RT01 RW05","MANDALAWANGI","CIPATAT","Bandung Barat","JAWA BARAT","0","","","","","","","","3217072405690005","3217070302060015","0001632634942","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("87","10143","2018-10-01","","L","Bandung","1969-02-23","25","1","A","KOMP BBA BLOK C1 RT01 RW11","JELEKONG","BALEENDAH","Bandung","JAWA BARAT","0","","","","","","","","3204322302690001","320432.300305.3515","0001632633682","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("88","10144","2018-10-01","","L","BANDUNG BARAT","1967-04-20","26","1","A","PURI CIPAGERAN INDAH 2C-3/20  RT10 RW20","TANIMULYA","NGAMPRAH","Bandung Barat","JAWA BARAT","0","","","","","","","","3217062004670003","3217060305058976","0001632636178","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("89","10145","0000-00-00","","L","BANDUNG","1965-04-21","24","1","A","JL BELIBIS VI NO 8  RT10 RW06","TENGAH","KRAMAT JATI","JAKARTA TIMUR","JAKARTA","0","","","","","","","","3175102104650009","3175041207170034","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("90","10146","2018-10-01","","L","Gunung Meriah","1968-08-10","25","1","A","KATULAMPA RT02 RW09","KATULAMPA","BOGOR TIMUR","BOGOR","JAWA BARAT","0","","","","","","","","3271021008680003","3271020103073620","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("91","10147","2018-10-01","","L","Bandung","1970-03-15","25","1","A","JL BATU RADEN X RT06 RW 07","MEKARJAYA","RANCASARI","BANDUNG","JAWA BARAT","0","","","","","","","","3214011503700008","3273232212150003","0001710941668","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("92","10148","2018-10-01","","L","Sumedang","1974-08-12","24","1","A","KP SUKARASA DUSUN I RT06 RW02","TANGGULUN TIMUR","KALIJATI","SUBANG","JAWA BARAT","0","","","","","","","","3213041208740002","3213043003062267","0001632625277","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("93","10095","2018-07-01","","P","","0000-00-00","22","1","A","OOOO","","","","","0","","","","","","","","","711721738522000","","15022385247","1310012512614","TISA YUANISA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("94","10034","2016-03-07","","L","BOGOR","1984-04-21","22","1","A","JL. MENTENG BLK 52 NO. 16 RT. 002/004","KEL. MENTENG","KEC. BOGOR BARAT","BOGOR","JAWA BARAT","0","08568982737","","","","","","","3271042104840017","755380086404000","16017572393","16017572393","1330010927382","IBNU SARJONO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("95","10038","0000-00-00","","L","BOGOR","1993-04-21","33","1","A","KP. GELONGGONG RT. 001/001","KEL. WARINGINJAYA","KEC. BOJONG GEDE","BOGOR","JAWA BARAT","0","087770826311","","","","","","","3201136104930002","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("96","10039","0000-00-00","","L","Jakarta","1995-08-24","23","1","A","JL. OTISTA RAYA GG. MASJID  RT. 010/009","KEL. BIDARACINA","KEC. JATINEGARA","JAKARTA TIMUR","JAKARTA","0","089676043058","","","","","","","3175036408950002","00","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("97","10042","2017-04-01","","L","MAGELANG","1973-08-16","25","1","A","JL. GONDANGDIA BARU NO. 129 RT. 016/008","KEL. JATI CEMPAKA","KEC. PONDOK GEDE","BEKASI","JAWA BARAT","0","081282087496","","","","","","","3175011608730002","584326714001000","","10036162427","1260004640180","ISNA RIFA\'I","1","0","0","0");
INSERT INTO tbl_identitas VALUES("98","10044","2017-05-02","","L","KUPANG","1993-12-30","33","1","A","VILLA KENALI PERMAI K5 NO.8 RT.018","KEL. MAYANG MANGURAI","KEC.KOTA BARU","JAMBI","JAMBI","0","","","","","","","","1571073012930000","744556291331000","0001766168831","16016137487","0225743009","ABDURRAHMAN","4","0","0","0");
INSERT INTO tbl_identitas VALUES("99","10048","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("100","10049","2017-06-02","","L","CIAMIS","1990-05-10","23","1","A","KP. SUGUTAMU RT.004/021","BAKTI JAYA","SUKMAJAYA","DEPOK","JAWA BARAT","0","","","","","","","","3276055005900009","353972342005000","","16033203544","6610632821","SITI ROSMAYANTI","2","0","0","0");
INSERT INTO tbl_identitas VALUES("101","10050","0000-00-00","","L","Jakarta","0000-00-00","33","1","A","PERUM BUKIT CIRENDEU BOLK D3 N0.13 RT.001/008","PONDOK CABE ILIR","PAMULANG","Tanggerang Selatan","Banten","0","","","","","","","","3674066305950014","00","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("102","10066","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","0001109239997","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("103","10062","2017-06-01","","L","","1985-06-06","24","1","A","00","","","","","0","","","","","","","","","679031922008000","","15007504366","1240006922257","ADYA KEMARA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("104","10067","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("105","10083","2016-11-01","","L","JAKARTA","1975-05-21","22","1","A","OOOJL. CEMPAKA PUTIH BARAT XX/5 RT. 005/007","KEL.CEMPAKA PUTIH BARAT","KEC. CEMPAKA PUTIH","JAKARTA PUSAT","JAKARTA","0","","","","","","","","3171052105750003","672422474024000","","","7060284231","G.HERYAWAN INDRAYATNA","2","0","0","0");
INSERT INTO tbl_identitas VALUES("106","10060","2014-11-10","","P","GUNUNG KIDUL","1992-01-19","33","1","A","KP. AREMAN NO. 30 RT. 01/08","KEL. TUGU","KEC. CIMANGGIS","DEPOK","JAWA BARAT","0","082299131078","","","","","","","3276025901920006","0000714796968412000","","14038628724","1570003387017","DIAN IKA NINGRUM","1","0","0","0");
INSERT INTO tbl_identitas VALUES("107","10167","2018-10-01","","P","Sidoarjo","1984-02-06","22","1","A","DSN WATES RT 006 RW 002","","KEDENSARI","TANGGULANGIN","Jawa Timur","0","","","","","","","","3515064206840005","84.913.900.1-617.000","0001322742879","","1410017104118","Yuni Nurmaya","1","0","0","0");
INSERT INTO tbl_identitas VALUES("108","10069","2018-01-02","","L","","1995-07-29","33","1","A","OOO","","","","","0","","","","","","","","","838278299001000","","","0060010244568","MUHAMAD RIZKY CAHYADI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("109","10064","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("110","10065","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("111","10070","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("112","10072","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("113","10073","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("114","10074","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("115","10098","2018-07-02","","L","Malang","1987-07-18","33","1","A","JL. JOYOGRAND KAV. DEPAG II NO. 52","","MERJOSARI","LOWOKWARU","","0","","","","","","","","3276062412920003","74.207.560.9-448.000","0001326245174","","157-00-047 4033-9","Syamsul Fadly","1","0","0","0");
INSERT INTO tbl_identitas VALUES("116","10076","2018-03-01","","L","","1992-12-10","22","1","O","OOO","","","","","0","","","","","","","","","0000","3174065012920006","3174065012920006","0060010272577","LATIFAH","1","0","0","0");
INSERT INTO tbl_identitas VALUES("117","10099","2018-06-17","","L","","1994-07-19","33","1","A","OOO","","","","","0","","","","","","","","","850516675517000","","","1350014837460","BAYUAJI PRABOWO NUGROHO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("118","10121","2018-10-01","","L","Jakarta","1974-03-15","25","1","A","BTN POLRI RT02 RW06","CEMPAKA","PLUMBON","CIREBON","JAWA BARAT","0","","","","","","","","3209181403740012","3209181407100006","0001628577819","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("119","10080","2018-04-02","","P","","1997-02-14","33","1","A","OOO","","","","","0","","","","","","","","","843071267617000","","","1410016507832","NUR FITRIA FEBRIANA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("120","10091","2018-05-02","","P","Serang","1994-03-12","33","1","A","VILLA NUSA INDAH II BLOK AA3/7","BOJONG KULUR","","","Jawa Barat","0","","","","","","","","3274034203940006","84.781.849.9-403.000","0001633621228","","1330015158454","Tania Intan Sari","1","0","0","0");
INSERT INTO tbl_identitas VALUES("121","10043","0000-00-00","","L","SURABAYA","1992-09-18","22","1","A","PERUM.TROSOBO UTAMA  JL.TROSOBO UTAMA III/B-29","TAMAN SIDOARJO","","","Jawa Timur","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("122","10153","2016-04-01","","L","Jakarta","1985-07-16","23","1","A","Asrama Brimob rt015/005 Kel Cipinang Kec Pulo Gadung","KEL.CIPINANG","KEC. PULOGADUNG","DKI Jakarta","DKI Jakarta","0","","","","","","","","3175021607850010","7775046220003000","13035200768","13035200768","9000041710840","Arif Fauzi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("123","10157","2018-08-01","","L","","1992-11-02","22","1","A","OOO","","","","","0","","","","","","","","","734843352608000","3529260211920003","3529260211920003","1400017900714","MOHAMMAD RIZAL SYARIEF","1","0","0","0");
INSERT INTO tbl_identitas VALUES("124","10154","2016-07-01","","L","","1969-03-01","24","1","A","OOO","","","","","0","","","","","","","","","670246222024000","","3171050103690003","1570004822988","WAHJU WIDODO","1","0","0","0");
INSERT INTO tbl_identitas VALUES("125","10155","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("126","10158","2018-08-01","","L","","1996-06-06","33","1","A","OOO","","","","","0","","","","","","","","","361032295603000","","","1410016905838","EEN AHMADAN YOGA WILANDA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("127","10159","2018-08-01","","P","","1987-12-22","24","1","A","OOO","","","","","0","","","","","","","","","0000","3671136212870001","3671136212870001","1010009933373","INDAH SUSANTI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("128","10160","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("129","10161","2018-09-03","","L","","1989-08-02","22","1","A","OOO","","","","","0","","","","","","","","","733345441444000","3204050208890015","3204050208890015","9000039731550","ADIA PUJA PRADANA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("130","10162","2018-09-03","","L","","1986-02-12","33","1","A","OOO","","","","","0","","","","","","","","","824241251448000","3276065202860004","3276065202860004","1570004878691","RIZQA  AMALIA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("131","10163","2018-09-01","","L","Jogjakarta","1987-01-07","33","1","A","JL. TANGKUBAN PERAHU NO. 6 PERUM PEPELEGI INDAH","","Waru","Sidoarjo","Jawa Timur","0","","","","","","","","3401060701870001","36.270.793.7-544.000","0001805982862","","1410016623720","Nur Agus Rachmawan","1","0","0","0");
INSERT INTO tbl_identitas VALUES("132","10164","2018-09-03","","P","","1993-02-09","33","1","A","OOO","","","","","0","","","","","","","","","851350678117000","1208234902930005","1208234902930005","1080016899263","SWANTI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("133","10165","2018-09-03","","L","","1989-12-23","33","1","O","OOO","","","","","0","","","","","","","","","736412990627000","3510182312890003","3510182312890003","1430018002814","M. SYAIFUL RIFQI ADI K","1","0","0","0");
INSERT INTO tbl_identitas VALUES("134","10166","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("135","10168","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("136","10169","2016-12-12","","L","SUMEDANG","1958-06-29","24","1","A","TAMAN WISMA ASRI BLOK AA.15 NO.41 RT.005/020","KEL.TELUK PUCUNG","KEC. BEKASI UTARA","BEKASI","JAWA BARAT","0","","","","","","","","3275032906580013","478007974407000","","","094846736","ANANG DAUS SOEMANTRI","4","0","0","0");
INSERT INTO tbl_identitas VALUES("137","10170","2018-08-01","","L","Malang","1987-07-18","23","1","A","JL. JOYOGRAND KAV. DEPAG II NO. 52","MERJOSARI","LOWOKWARU","","","0","","","","","","","","0001299869087","88.025.088.1-520.000","0001299869087","","144.00.1768671.5","Fauzi Rachman Juang Pribadi","1","0","0","0");
INSERT INTO tbl_identitas VALUES("138","10171","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("139","10152","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("140","10100","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("141","10009","2017-02-01","","L","MOJOKERTO","1976-07-18","25","1","A","VILLA NUSA INDAH 5 BLOK SJ 4 NO.15 RT.001/015","KEL.CIANGSANA","KEC.GUNUNG PUTRI","BOGOR","JAWA BARAT","16968","081314936176","","","","","","","3201021807760006","0000676632797403000","","96J80271875","1290007168202","RONI WIJAYA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("142","10057","2016-05-02","","L","BANDUNG","1978-03-09","23","1","A","JL.H. MERIN KAV BRI BLOCK E NO.1E RT.003/004","MERUYA SELATAN","KEMBANGAN","JAKARTA BARAT","JAKARTA","0","","","","","","","","3273140703780008","542911276086000","","12038529454","9000005579967","ANDI RUSDIANA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("143","10059","2016-11-03","","L","KULON PROGO","1981-08-19","24","1","A","CITRA INDAH BUKIT MAHONI BLOK T 1/25 RT.003/010","KEL.SUKAMAJU","KEC.JONGGOL","BOGOR","JAWA BARAT","0","081314261761","","","","","","","3401121908810001","0000","","14044482652","9000014022611","MUSTOFA","1","0","0","0");
INSERT INTO tbl_identitas VALUES("144","10086","2018-05-02","","L","","1988-09-28","33","1","A","OOO","","","","","0","","","","","","","","","731676219617000","","0001456995115","1410034600882","Lowig Caesar Sinaga","1","0","0","0");
INSERT INTO tbl_identitas VALUES("145","10096","2018-07-01","","P","","1989-04-12","33","1","A","OOO","","","","","0","","","","","","","","","450588983201000","","15022384752","9000028748979","EVIL RAMADHANI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("146","10016","0000-00-00","","L","","0000-00-00","24","1","A","asd","","","","","0","","","","","","","","","asd","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("147","10045","2017-05-08","","L","","1993-07-29","33","1","A","OOO","","","","","0","","","","","","","","","769753310407000","","3275032907930021","1560012036671","MUHAMMMAD FAHRI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("148","10053","2017-05-02","","L","","1977-06-08","25","1","A","OOO","","","","","0","","","","","","","","","269085031401000","","","1630001169328","EDI JUNAEDI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("149","10056","2017-08-01","","L","BANDUNG","1983-02-02","24","1","A","CEMPAKA MEKAR RT.005/004","CIMAREME","NGAMPRAH","BANDUNG","JAWA BARAT","0","","","","","","","","3217060202830035","3217060202830035","","","1310011863166","HENDRY","1","0","0","0");
INSERT INTO tbl_identitas VALUES("150","10017","0000-00-00","","L","","0000-00-00","24","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("151","10018","0000-00-00","","L","","0000-00-00","25","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("152","10084","2016-11-01","","L","Jakarta","1988-02-23","23","1","A","JL. CEMERLANG NO.23 RT.006/002","KEL.JATIBENING BARU","KEC. PONDOK GEDE","BEKASI","JAWA BARAT","0","087782877389/082213972147","","","","","","","3275082302880009","0000","10016499617","10016499617","1570005429999","Ario Seto","1","0","0","0");
INSERT INTO tbl_identitas VALUES("153","10089","2018-05-02","","L","","1973-08-12","24","1","A","OOO","","","","","0","","","","","","","","","0000","","","1520016508273","AGUS TRIWAHYUDI","1","0","0","0");
INSERT INTO tbl_identitas VALUES("154","10055","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("155","10046","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("156","10019","0000-00-00","","L","","0000-00-00","25","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("157","10033","0000-00-00","","L","CIREBON","1986-09-03","22","1","A","GANG DESA NO. 20 RT. 004/001","KEL. PASINDANGAN","KEC. GUNUNGJATI","CIREBON","JAWA BARAT","0","081312474785","","","","","","","3209214309860001","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("158","10020","0000-00-00","","L","","0000-00-00","33","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("159","10021","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("160","10022","0000-00-00","","L","","0000-00-00","14","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("161","10024","0000-00-00","","P","","0000-00-00","25","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("162","10041","0000-00-00","","L","JAKARTA","1989-06-04","22","1","A","BUKIT KEMIRI  2 BLOK A/XI NO.6 RT. 001/016","KEL.TUGU","KEC. CIMANGGIS","DEPOK","JAWA BARAT","16451","081219504134","","","","","","","3276020406890009","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("163","10156","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("164","10097","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("165","10090","2018-05-02","","L","Purwakarta","1989-10-28","22","1","A","KP CIMANGLID","","SUKATANI","PURWAKARTA","Jawa Barat","0","","","","","","","","3214032810890001","84.669.244.0-409.000","0001447845502","","1660001116870","Robby Nugraha","1","0","0","0");
INSERT INTO tbl_identitas VALUES("166","10085","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("167","10088","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("168","10087","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("169","10077","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("170","10068","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("171","10061","0000-00-00","","L","TASIK MALAYA","1980-12-07","22","1","A","DUSUN SADANG RT.003/006","KEL. CIBEUSI","KEC.JATINANGOR","SUMEDANG","JAWA BARAT","0","082116906653","","","","","","","3211154712800015","00","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("172","10051","0000-00-00","","L","BANDUNG","1965-03-25","22","1","A","JL. CIHAMPELAS NO.246 A RT.007/004","KEL.CIPAGANTI","KEC.COBLONG","BANDUNG","JAWA BARAT","0","","","","","","","","3273022503650001","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("173","10047","0000-00-00","","L","KEBUMEN","1974-03-20","22","1","A","SIKAMBANG RT.01/002","KARANGSARI","KUTOWINANGUN","JAWA TENGAH","","0","","","","","","","","3305102003740007","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("174","10032","0000-00-00","","P","CIREBON","1976-10-06","22","1","A","JL. KARIMUN JAWA NO. 56 BTN NUSANTARA RT. 003/002","KEL. ARGASUNYA","KEC. HARJAMUKTI","CIREBON","JAWA BARAT","0","085295509299","","","","","","","327434610760010","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("175","10036","0000-00-00","","L","CIREBON","1988-07-03","22","1","A","DUSUN 03 RT. 025/008","DESA LEMAHABANG","KEC. LEMAHABANG","CIREBON","JAWA BARAT","0","085643908951","","","","","","","3209074307880006","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("176","10029","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("177","10035","0000-00-00","","L","CIREBON","1985-03-12","22","1","A","DUSUN NANGKA RT. 003/001","KEL. ASTANAJAPURA","KEC. ASTANAJAPURA","CIREBON","JAWA BARAT","0","081320267160","","","","","","","3209101203860016","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("178","10079","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("179","10071","0000-00-00","","L","","0000-00-00","22","1","A","OOO","","","","","0","","","","","","","","","0000","","","","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("180","10172","0000-00-00","","L","JAKARTA","1985-08-07","25","1","A","JL. PUSKEMAS NO. 73 RT.004/003","KEL. SETU","KEC. CIPAYUNG","JAKARTA TIMUR","JAKARTA","13880","021.84593809","","","","","","","3175100708850006","670112747009000","09017717068","","0700005342964","","1","0","0","0");
INSERT INTO tbl_identitas VALUES("181","10054","0000-00-00","","P","","0000-00-00","24","1","A","dd","","","","","0","","","","","","","","","d","","","","","1","0","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tbl_keahlian VALUES("3","10012","sdm","9094-002-2017 SE  UPACARA.docx");



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
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

INSERT INTO tbl_keluarga VALUES("4","10012","Suprihanta, S.Kom","L","Jakarta","1969-01-12","49","28");
INSERT INTO tbl_keluarga VALUES("5","10012","Rafif Nurmanda Ghafurutama","L","Tangerang","1998-06-10","20","1");
INSERT INTO tbl_keluarga VALUES("6","10012","Muhammad Permata Wijayanto","L","Tangerang","2002-02-17","16","2");
INSERT INTO tbl_keluarga VALUES("8","10012","Ulfah Rofifah Nurmitasari","P","Tangerang","2005-02-20","13","3");
INSERT INTO tbl_keluarga VALUES("9","10103","EUIS MUSLIAH","P","MAJALENGKA","0000-00-00","43","31");
INSERT INTO tbl_keluarga VALUES("10","10103","FARSYAD AKBAR KARSAWIJAYA","L","MAJALENGKA","2006-05-16","12","1");
INSERT INTO tbl_keluarga VALUES("11","10103","INDHIRA SUPIYAR","P","KUNINGAN","2012-03-19","6","2");
INSERT INTO tbl_keluarga VALUES("12","10104","ICIH KURNIASIH","P","Brebes","1978-04-23","40","31");
INSERT INTO tbl_keluarga VALUES("13","10104","IHZADI AHMAD","L","TEGAL","2001-01-17","17","1");
INSERT INTO tbl_keluarga VALUES("14","10104","FACHRI ANGGA MULA","L","BOGOR","2006-01-13","12","2");
INSERT INTO tbl_keluarga VALUES("15","10104","HANIA  MILLATI PUTRI","P","CIREBON","2012-03-28","6","3");
INSERT INTO tbl_keluarga VALUES("16","10106","FENNIE INDAH WAHYUNI","P","SURABAYA","1972-11-23","45","31");
INSERT INTO tbl_keluarga VALUES("17","10106","ANGGIE DEVITASARI","P","CIREBON","2002-11-23","15","1");
INSERT INTO tbl_keluarga VALUES("18","10106","REGITA AZZAHRA CAHYANI","P","CIREBON","2006-09-09","12","2");
INSERT INTO tbl_keluarga VALUES("19","10107","AYU DWI ENDAH","P","NGANJUK","1974-03-25","44","31");
INSERT INTO tbl_keluarga VALUES("20","10107","AULITA PURWANINGTYAS","L","NGANJUK","1999-07-24","19","1");
INSERT INTO tbl_keluarga VALUES("21","10107","AULITA PURWANINGTYAS","L","NGANJUK","2006-02-04","12","2");
INSERT INTO tbl_keluarga VALUES("22","10102","ERI HERLINA","P","Tangerang","1976-04-20","42","31");
INSERT INTO tbl_keluarga VALUES("23","10102","RAMY FAUZAN RAMADHAN","L","Kuningan","2003-11-14","14","1");
INSERT INTO tbl_keluarga VALUES("24","10102","RAIHAN AMRU HASSAN","L","Kuningan","0000-00-00","6","2");
INSERT INTO tbl_keluarga VALUES("25","10102","RAISYA ADIFA FATHINIA","P","Cirebon","2017-01-30","1","3");
INSERT INTO tbl_keluarga VALUES("26","10108","SILFI ALFITA","P","Malang","1989-01-10","29","31");
INSERT INTO tbl_keluarga VALUES("27","10108","NAWAF SUFI ALFATIR","P","Malang","2017-03-30","1","1");
INSERT INTO tbl_keluarga VALUES("28","10114","AMALIA KAUTSAR","P","Bandung","0000-00-00","24","31");
INSERT INTO tbl_keluarga VALUES("29","10114","MUHAMMAD ARSYAD A","L","Bandung","2015-06-24","3","1");
INSERT INTO tbl_keluarga VALUES("30","10114","ALDIRA ROMEESA FARZANA","P","Bandung","2018-01-08","0","20");
INSERT INTO tbl_keluarga VALUES("31","10115","KARTINI","P","NGANJUK","1976-02-16","42","31");
INSERT INTO tbl_keluarga VALUES("32","10115","MOCHAMMAD IQBAL MACHMUD","L","NGANJUK","2000-05-18","18","1");
INSERT INTO tbl_keluarga VALUES("33","10115","SAFITRI AULIA SABATINI","P","Semarang","2004-11-24","13","2");
INSERT INTO tbl_keluarga VALUES("34","10115","AURA NURHANIYAH HUWAIDAH","P","Semarang","2010-12-11","7","3");
INSERT INTO tbl_keluarga VALUES("35","10116","SUPARMI","P","KEBUMEN","1972-06-10","46","31");
INSERT INTO tbl_keluarga VALUES("36","10116","DIVYA BUDI AMANTARI","P","Semarang","2000-04-19","18","1");
INSERT INTO tbl_keluarga VALUES("37","10116","LAINYTHA BUDI ANANTA","P","Semarang","2008-03-24","10","2");
INSERT INTO tbl_keluarga VALUES("38","10117","UNDANG SILASARI","L","Palangkaraya","1982-01-02","36","31");
INSERT INTO tbl_keluarga VALUES("39","10117","MUHAMMAD ARJUNUR HUTAGAOL","L","Semarang","2009-08-17","9","1");
INSERT INTO tbl_keluarga VALUES("40","10117","ARSILA ZAHRA NENGTYAS HUTAGAOL","P","Semarang","2013-03-03","5","2");
INSERT INTO tbl_keluarga VALUES("41","10118","PUJI RAHAYU","L","TEGAL","1975-10-31","43","31");
INSERT INTO tbl_keluarga VALUES("42","10118","SYAHRIAN ALVAZADANE","P","TEGAL","2002-07-22","16","1");
INSERT INTO tbl_keluarga VALUES("43","10118","FAISAL HILMI ADRIANSYAH","L","TEGAL","2007-01-29","11","2");
INSERT INTO tbl_keluarga VALUES("44","10118","ZAFIRA","P","TEGAL","2012-01-09","6","2");
INSERT INTO tbl_keluarga VALUES("45","10119","FENY INDAH","L","SEMARANG","1973-11-19","44","31");
INSERT INTO tbl_keluarga VALUES("46","10119","FESI GEMPAR WAHYU EKO PRASETYO","L","Semarang","1994-10-04","24","1");
INSERT INTO tbl_keluarga VALUES("47","10119","FEGI WAHYU DWIANGGA","L","SEMARANG","1998-12-09","19","2");
INSERT INTO tbl_keluarga VALUES("48","10119","FESYA ANGGUN ICHTRIYAR","L","SEMARANG","2007-11-22","10","3");
INSERT INTO tbl_keluarga VALUES("49","10120","DARSI","P","WONOGIRI","0000-00-00","48","31");
INSERT INTO tbl_keluarga VALUES("50","10120","ADIT MULYA SAPUTRA","L","WONOGIRI","2004-06-12","14","1");
INSERT INTO tbl_keluarga VALUES("51","10120","REHAN SAPUTRA","L","CIREBON","0000-00-00","7","2");
INSERT INTO tbl_keluarga VALUES("52","10122","ROKHMAWATI","P","Malaysia","1980-02-07","38","31");
INSERT INTO tbl_keluarga VALUES("53","10122","FARRIS SEPTIAN AL MAHRI","L","CIREBON","2007-09-02","11","1");
INSERT INTO tbl_keluarga VALUES("54","10122","FARRID AGUSTI SANDI","L","CIREBON","2009-08-02","9","2");
INSERT INTO tbl_keluarga VALUES("55","10122","FARRZAN HAFIDZ RAFIE RABBANI","L","Cirebon","2013-09-11","5","3");
INSERT INTO tbl_keluarga VALUES("56","10123","SUKAESIH","L","Majalengka","1977-08-26","41","31");
INSERT INTO tbl_keluarga VALUES("57","10123","AISYAH CITRA SABILLAH","P","Cirebon","2000-10-14","18","1");
INSERT INTO tbl_keluarga VALUES("58","10123","ACHMAD HAEKAL","L","Cirebon","2007-02-17","11","2");
INSERT INTO tbl_keluarga VALUES("59","10123","ADHYAKSA FAIRUZ","L","Cirebon","2008-01-27","10","3");
INSERT INTO tbl_keluarga VALUES("60","10124","ADE NOVIE ARDHAYANI","P","Medan","1977-11-30","40","31");
INSERT INTO tbl_keluarga VALUES("61","10124","MHD RADHIT RAKASA RANGKUTI","L","Medan","2006-10-30","12","1");
INSERT INTO tbl_keluarga VALUES("62","10124","RAISA REGINA RANGKUTI","L","Medan","2008-07-28","10","2");
INSERT INTO tbl_keluarga VALUES("63","10124","MHD RIFFAT RABBANI RANGKUTI","P","Medan","0000-00-00","3","3");
INSERT INTO tbl_keluarga VALUES("64","10125","LIDYA RIMARIYANTINI","P","Batam","1993-06-18","25","31");
INSERT INTO tbl_keluarga VALUES("65","10125","ADRIAN PRADIFTA RAJENDRA","L","Cirebon","0000-00-00","48","2");
INSERT INTO tbl_keluarga VALUES("66","10125","DIVA RIZKA RESTIANA","P","Cirebon","0000-00-00","15","1");
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
INSERT INTO tbl_keluarga VALUES("81","10132","RETNO TRI LESTARI","P","Medan","1970-08-28","48","31");
INSERT INTO tbl_keluarga VALUES("82","10132","DONNY PUTRA NUGRAHA HANDOYO","L","Medan","1997-07-30","21","1");
INSERT INTO tbl_keluarga VALUES("83","10132","RANGGA DWI PRAKOSO HANDOYO","L","Medan","1999-03-09","19","2");
INSERT INTO tbl_keluarga VALUES("84","10132","AUDRY BIANDA PUTRI HANDOYO","P","Medan","2000-05-21","18","3");
INSERT INTO tbl_keluarga VALUES("85","10133","SRI WINDAYANI","P","Medan","1979-05-31","39","31");
INSERT INTO tbl_keluarga VALUES("86","10133","ROBY ADAM FAQIH SIHOMBING","L","Medan","2003-10-12","15","1");
INSERT INTO tbl_keluarga VALUES("87","10133","MUHAMMAD BAGAS FAQIH SIHOMBING","L","Medan","2007-08-17","11","2");
INSERT INTO tbl_keluarga VALUES("88","10136","YENNI","L","Medan","0000-00-00","39","31");
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
INSERT INTO tbl_keluarga VALUES("114","10143","MUHAMAAD RIFQI MAOLANA","P","Bandung","1996-08-11","22","1");
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
INSERT INTO tbl_keluarga VALUES("140","10","Erwin Reza Bachtiar","L","Jakarta","1969-02-12","49","28");
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO tbl_keterangan_presensi VALUES("1","16","8","Penting","2018-10-09","11.10","1","0");
INSERT INTO tbl_keterangan_presensi VALUES("7","16","8","22","2018-10-09","22.22","0","0");
INSERT INTO tbl_keterangan_presensi VALUES("9","16","4","badminton","2018-10-21",".","1","2");
INSERT INTO tbl_keterangan_presensi VALUES("10","16","4","sakit","2018-10-18",".","1","2");
INSERT INTO tbl_keterangan_presensi VALUES("11","16","10012","sakit","2018-10-09",".","1","2");
INSERT INTO tbl_keterangan_presensi VALUES("12","16","10012","Penting","2018-10-16",".","1","2");
INSERT INTO tbl_keterangan_presensi VALUES("13","16","10012","asf","2018-10-04",".","1","2");



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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO tbl_kontrak VALUES("7","10012","2018-09-06","2018-09-28","","2","habis");
INSERT INTO tbl_kontrak VALUES("12","10072","0000-00-00","2018-10-23","","27","habis");
INSERT INTO tbl_kontrak VALUES("13","10073","0000-00-00","2018-09-25","","29","habis");
INSERT INTO tbl_kontrak VALUES("14","10072","2018-09-27","2019-09-19","8600-03441.pdf","","habis");
INSERT INTO tbl_kontrak VALUES("18","10026","2018-10-04","2018-11-02","","0","habis");
INSERT INTO tbl_kontrak VALUES("20","10","2018-01-02","0000-00-00","","","habis");



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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO tbl_lembur VALUES("18","15","8","2018-09-11","mengerjakan presentasi TIP","22.20","23.18","1","1","0");
INSERT INTO tbl_lembur VALUES("19","15","8","","","0.0","8.10","1","1","0");
INSERT INTO tbl_lembur VALUES("20","15","8","","","6.10","15.10","1","1","0");
INSERT INTO tbl_lembur VALUES("34","16","8","2018-09-12","asfasfasf","3.4","4.4","1","1","0");
INSERT INTO tbl_lembur VALUES("35","16","10012","2018-09-19","Input gaji","18.12","20.05","1","0","2");
INSERT INTO tbl_lembur VALUES("37","16","8","","asd","11.11","11.11","1","0","0");
INSERT INTO tbl_lembur VALUES("38","16","8","","asd","11.11","11.11","1","1","0");
INSERT INTO tbl_lembur VALUES("39","16","8","","asd","11.11","11.11","0","0","0");
INSERT INTO tbl_lembur VALUES("40","16","8","","asd","11.11","11.11","0","0","0");
INSERT INTO tbl_lembur VALUES("41","16","8","","asd","11.11","11.11","0","0","0");
INSERT INTO tbl_lembur VALUES("42","16","10012","2018-10-25","dd","12.12","12.12","1","0","2");



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tbl_organisasi VALUES("1","10012","qweqwe","qweqweqweqweqwe","2018-09-19","2018-09-27","123123");
INSERT INTO tbl_organisasi VALUES("2","10172","MD3-DAKWAH","Staf Acara","0000-00-00","0000-00-00","");



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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tbl_potongan VALUES("1","5","4","28","78100");
INSERT INTO tbl_potongan VALUES("2","5","10012","7","2100000");
INSERT INTO tbl_potongan VALUES("3","5","10012","1","181067");
INSERT INTO tbl_potongan VALUES("4","5","10012","9","364506");
INSERT INTO tbl_potongan VALUES("5","5","10012","22","14000");



DROP TABLE tbl_presensi;

CREATE TABLE `tbl_presensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divisi` varchar(25) NOT NULL,
  `bulan` date NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;

INSERT INTO tbl_ref_jabatan VALUES("1","KOMISARIS UTAMA","1","0");
INSERT INTO tbl_ref_jabatan VALUES("2","KOMISARIS","1","0");
INSERT INTO tbl_ref_jabatan VALUES("3","SEKRETARIS KOMISARIS","1","0");
INSERT INTO tbl_ref_jabatan VALUES("4","DIREKTUR UTAMA","1","0");
INSERT INTO tbl_ref_jabatan VALUES("5","DIREKTUR TEKNIK","1","0");
INSERT INTO tbl_ref_jabatan VALUES("6","DIREKTUR KEUANGAN DAN UMUM","1","0");
INSERT INTO tbl_ref_jabatan VALUES("7","----  DEPARTEMEN MARKETING & SALES  ----  ","2","2");
INSERT INTO tbl_ref_jabatan VALUES("8","GENERAL MANAGER MARKETING & SALES","2","2");
INSERT INTO tbl_ref_jabatan VALUES("9","OFFICER ADMINISTRATION","2","2");
INSERT INTO tbl_ref_jabatan VALUES("10","MANAGER MARKETING","2","0");
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
INSERT INTO tbl_ref_jabatan VALUES("170","----  REST AREA JASAMARGA GEMPOL PASURUAN (JGP)  ---- ","16","0");
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



DROP TABLE tbl_role;

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin` (`admin`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
INSERT INTO tbl_role VALUES("15","11","Specialist");
INSERT INTO tbl_role VALUES("16","12","Advisor");



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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO tbl_sppd VALUES("14","6","Halim Perdana Kusumah","Kualanamu","","2018-09-21","2018-09-20","interview karyawan","1","1","1","1","1","1975-Bukti Potong Pph23.pdf","2","1");
INSERT INTO tbl_sppd VALUES("27","1","asd","asd","","0000-00-00","0000-00-00","asd","1","1","1","0","0","","0","1");
INSERT INTO tbl_sppd VALUES("30","1","dsa","dsa","","2018-09-26","2018-09-22","dsa","1","1","1","0","1","","0","1");
INSERT INTO tbl_sppd VALUES("32","1","dsa","dsa","","2018-09-18","0000-00-00","dsa","1","1","1","0","1","","0","1");



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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`id_user`),
  KEY `nama` (`nama`),
  KEY `fff` (`admin`),
  KEY `unit` (`unit`),
  CONSTRAINT `fsa` FOREIGN KEY (`admin`) REFERENCES `tbl_role` (`admin`)
) ENGINE=InnoDB AUTO_INCREMENT=10179 DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("1","sdm","13bb8b589473803f26a02e338f949b8c","Admin SDM - Umum","-","1","0","","19","","","4","0","2","","1","0","3600","2","0","0");
INSERT INTO tbl_user VALUES("2","PK068","37d153a06c79e99e4de5889dbe2e7c57","Aprillia Hermansyah","PK068","7","0","6422-april.jpg","4","10","47","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("4","PK060","d69ed7e8520a6ee31d5ab1d597726f34","Dendito Pratama","PK060","7","0","1167-dendito.jpg","19","57","123","5","12","2","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("6","10022","93a27b0bd99bac3e68a440b48aa421ab","Sumarsono","10022","4","0","3032-ono.jpg","19","54","106","3","12","2","","1","0","3600","1","4","0");
INSERT INTO tbl_user VALUES("7","10001","d89f3a35931c386956c1a402a8e09941","Hubby Ramdhani","10001","4","0","8578-Hubby.jpg","10","30","75","3","0","7","","0","0","3600","1","4","1");
INSERT INTO tbl_user VALUES("8","admin","d69ed7e8520a6ee31d5ab1d597726f34","Super Admin","-","1","0","5911-Logo Master JMP video.jpg","0","","BANG ADMIN","0","999998","2","","1","32","3600","0","0","0");
INSERT INTO tbl_user VALUES("9","10003","f5dffc111454b227fbcdf36178dfe6ac","Uci Sanusi","10003","5","0","2493-uci.jpg","18","52","98","3","0","3","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10","10007","9cdf26568d166bc6793ef8da5afa0846","R.A. Ayu Suzanne P","10007","11","0","2770-ayu.jpg","4","SEKSI PROPERTY ENGINEERING & MAINTENANCE","49","4","0","4","","1","0","3600","2","7","0");
INSERT INTO tbl_user VALUES("9999","tampung","tampung","-","tampung","4","0","","0","","","0","0","0","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10001","10010","a17479231dc298309a3fda7d7d00111a","Irwansyah Rinaldhi","10010","5","0","2675-akung.jpg","14","38","87","3","0","7","","0","0","3600","1","6","1");
INSERT INTO tbl_user VALUES("10002","10011","a2369958a9645eac52b58a8134e2ef5a","Dede Ahmad Nurhadi","10011","5","0","2940-dede.jpg","12","48","147","3","0","7","","0","0","3600","1","6","1");
INSERT INTO tbl_user VALUES("10003","10014","7b9d31aa17b849b238ab79cef0733041","Meta Herlina Puspitaningtyas","10014","4","0","155-Meta H.jpg","3","DEPARTEMENT BUSINESS DEVELOPMENT","32","3","0","5","","1","0","3600","1","4","0");
INSERT INTO tbl_user VALUES("10004","10015","342b5fe6486788799659c39bbfc3fa02","Marlina Ririn Indriyani","10015","5","0","8201-liena.jpg","2","SEKSI MARKETING","10","3","0","6","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10005","10016","1ce9168a60deae4a994dbd5b2d145699","Engkun Purkonudin","10016","5","0","7464-engkun.jpg","11","33","87","3","0","7","","0","0","3600","1","6","1");
INSERT INTO tbl_user VALUES("10006","10017","24064e6576a74af1b8eda89277c6b659","Sri Rejeki Handayani","10017","4","0","","18","50","95","3","5","3","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10007","10019","73c730319cf839f143bf40954448ce39","Hanna Farida Tampubolon","10019","5","0","8427-hanna.jpg","10","SEKSI AREA CONTROL","83","3","0","7","","0","0","3600","1","6","1");
INSERT INTO tbl_user VALUES("10008","10020","c1722a7941d61aad6e651a35b65a9c3e","Donny Ikhwan","10020","4","0","5784-donny.jpg","4","DEPARTEMEN ENGINEERING","46","3","0","4","","1","0","3600","1","4","0");
INSERT INTO tbl_user VALUES("10009","10021","f702defbc67edb455949f46babab0c18","Roni Wijaya","10021","6","0","6013-cakroni.jpg","2","3","12","3","0","6","","1","0","3600","1","8","0");
INSERT INTO tbl_user VALUES("10010","10023","7b8bc3700ce886e8627f41e799fe764f","Imad Zaky Mubarak","10023","4","0","8515-zaky.jpg","2","2","8","3","0","6","","1","0","3600","1","4","0");
INSERT INTO tbl_user VALUES("10011","10025","76d0baca6075c45cd8a3a55fa6a23c05","Tria Oktaviani","10025","5","0","6110-tria.jpg","4","Office","48","3","0","4","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10012","10027","3882c5a9869d86def6b7be879605522e","Sumarmi","10027","5","0","5295-sumarmi.jpg","19","55","108","3","8","2","3","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10013","10029","6072cd1424d62d9c33c6a7a82cacd40e","Edmundus Edy Pancaningtyas","10029","6","0","6744-edmundus.jpg","19","SEKSI HR & GENERAL AFFAIR","111","3","0","2","","1","0","3600","1","8","0");
INSERT INTO tbl_user VALUES("10014","10030","08d562c1eedd30b15b51e35d8486d14c","Irwan Zaini Luthfi","10030","5","0","","13","35","87","3","0","7","","0","0","3600","1","6","1");
INSERT INTO tbl_user VALUES("10015","10031","d2cb583f4b5bdc51b965ae555ee6bca5","Katni","10031","6","0","8673-katni.jpg","18","52","77","3","0","3","","1","0","3600","1","8","0");
INSERT INTO tbl_user VALUES("10016","10032","c63a5650dcd0bf04b35bd712466010bc","Muhamad Agus Sunardi","10032","7","0","8598-Agus.jpg","14","KM 519 A","159","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10017","10033","10fa5eb83300e5f592b9b35a0e07fc3f","Setya Prayitno","10033","7","0","8152-setya.jpg","14","KM 519 A","156","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10018","10034","b2fb19fe374529d3658197da0657ab0c","Bagus Sugiharto","10034","7","0","3270-bagus.jpg","8","26","164","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10019","10035","329d1ea6acb272924f991d523b2d2b80","Karmin","10035","7","0","","8","Office","148","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10020","10036","7c127e0c66f06e58c7c7310a7c6fa488","Rudi Tatang","10036","7","0","","13","Office","148","5","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10021","10037","4ccea3161064506dda8e0c9fd416d1ae","Sandy Irawan","10037","7","0","","14","38","156","5","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10022","10038","0f6b1f657ac30ab76519ed4c677e9909","Irwan Pahala Simanungkalit","10038","7","0","","17","49","180","1","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10023","10039","2a8009525763356ad5e3bb48b7475b4d","Ade Gustika","10039","5","0","","3","58","186","3","0","5","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10024","10040","f250daff6a09865ff432821b2adac54f","Mintari Yulianingsih","10040","4","0","","10","DEPARTEMEN RELATED BUSINESS OPERATION","32","1","0","5","","0","0","3600","1","4","1");
INSERT INTO tbl_user VALUES("10025","D0005","fed2bb44e5db4d3b34370d2ed061fbbd","Irwan Artigyo Sumadiyo","D0005","2","0","3093-irwan.jpg","1","Office Direksi","4","2","0","1","","1","0","3600","2","2","0");
INSERT INTO tbl_user VALUES("10027","PK102","04e246e949e3a9b2b80c4d7d3bef872d","Herdwin Nofrian","PK102","5","0","5473-ewin.jpg","18","53","101","5","5","3","","1","0","3600","2","6","0");
INSERT INTO tbl_user VALUES("10031","PK016","04ce83bf1967d561285890241abf11eb","Handa Rudita","PK016","5","0","3204-handa.jpg","3","SEKSI LAND AND PERMIT","41","5","0","5","","0","0","3600","2","6","1");
INSERT INTO tbl_user VALUES("10032","PK018","5809b0678dc7b34a25b86aa416859b59","Mia Restu Oktavia Sutanty","PK018","8","0","7777-mia.jpg","12","48","129","5","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10033","PK019","88d85dfa2eda0c1db1c2b37fbf7bfba8","Rafika Afrianne Ichsan","PK019","8","0","1774-fika.jpg","12","KM 207 A","128","5","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10034","PK020","a349c90fb067eae78defd650c86e942e","Ibnu Sarjono","PK020","7","0","8448-ibnu.jpg","5","16","71","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10035","PK021","942e07c72a2f12ef5368b7dfd5c53116","Salmadi","PK021","7","0","7847-salmadi.jpg","12","Office","131","5","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10036","PK022","189a008966f509fdd63b7e32738df63c","Julian Dwi Kusuma Lestari","PK022","8","0","","12","48","132","5","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10037","PK023","ff06415acd8ad03505030f2baac4607c","Widyadji Sasono","PK023","6","0","4368-loudy.jpg","18","51","97","5","5","3","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10038","PK024","59332b589a064382226ec34492419cba","Riyen Haryani","PK024","8","0","298-riyen.jpg","2","3","30","5","0","6","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10039","PK025","b07128152c5ecdf73181148efb673d41","Risma Nurjannah","PK025","8","0","6824-risma.jpg","19","55","116","5","0","7","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10040","PK027","dced105c62a12c5b94280160612ad040","Gatri Ayuning Lestari","PK027","6","0","5588-gatri.jpg","18","SEKSI ACCOUNTING & TAX","102","5","5","3","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10041","PK028","bfb3852b4814d2e61598f2ad07d46298","Kevin Dwiagy Emerald","PK028","8","0","6146-kevin.jpg","19","57","124","5","0","2","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10042","PK029","0792bd88dc6cc0dd49e7cb0939bccbfd","Isna Rifai","PK029","6","0","7449-oye.jpg","5","15","67","5","0","7","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10043","PK030","8393df7e9ec7bd6f46cc2662095b147a","Resy Alifianti Suprapto","PK030","8","0","1616-resy.jpg","5","14","65","5","0","5","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10044","PK031","3168f142ce3904a787b2ab3f68ae5968","Abdurrahman","PK031","6","0","5645-rahman.jpg","4","SEKSI PROPERTY ENGINEERING & MAINTENANCE","49","5","0","4","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10045","PK032","3384d017ec0e7f0f17d2c3d18b608c24","Muhammad Fahri","PK032","6","0","7468-fahri.jpg","6","18","67","5","0","4","","0","0","3600","2","8","1");
INSERT INTO tbl_user VALUES("10046","PK033","14c96390890cda796ba8a0100f647a4f","Saipul Anwar","PK033","8","0","","11","33","91","5","0","5","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10047","PK034","1872f655b7c18c6774a606268f9e8397","Muhamad Nur Baedi","PK034","8","0","","12","KM 207 A","130","5","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10048","PK035","57bf2d8dc369f5238ad508888f101ef9","Reza Ahmad Fauzi","PK035","7","0","6421-rezaahmad.jpg","5","13","71","5","0","5","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10049","PK036","7cc3666509e65e7209d2517003c984d9","Siti Rosmayanti","PK036","8","0","9550-rosma.jpg","2","3","29","5","0","6","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10050","PK037","5eb0614e5a420717938116ce87e358fd","Maylisa Marsita Anggreina Siahaya","PK037","8","0","3452-ica.jpg","2","3","20","5","0","6","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10051","PK038","beb1c0c148f8a01a9b7a19e4f7d009c1","Adhi Sujana","PK038","5","0","2234-adhi.jpg","12","KM 207 A","126","5","0","7","","0","0","3600","2","6","1");
INSERT INTO tbl_user VALUES("10052","PK039","934e01f1ff02e5797dcdf3d387ab25b7","Eko Prabowo","PK039","8","0","","7","20","72","5","0","5","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10053","PK040","c2797a8ce242cb02cd045f49b1754740","Edi Junaedi","PK040","6","0","","6","18","67","5","0","4","","0","0","3600","2","8","1");
INSERT INTO tbl_user VALUES("10054","PK041","e900266bd33ff5bbf04c76871467509a","Lucyanna Nilasary","PK041","6","0","","19","56","121","5","0","0","","0","0","3600","0","8","0");
INSERT INTO tbl_user VALUES("10055","PK043","3f2fb0a541774e24ac0eefd7c1775299","Agus Setyawan","PK043","6","0","","7","20","67","5","0","5","","0","0","3600","2","8","1");
INSERT INTO tbl_user VALUES("10056","PK044","e8c3701613c6192f5578534912bc410f","Hendry","PK044","6","0","7607-hendry.jpg","6","KM 418 B","67","5","0","4","","0","0","3600","2","8","1");
INSERT INTO tbl_user VALUES("10057","PK045","0e0f18e07ffc9e2d40ac8e0f2d3246fd","Andi Rusdiana","PK045","5","0","2909-andirus.jpg","5","Office","62","5","0","4","","0","0","3600","2","6","1");
INSERT INTO tbl_user VALUES("10058","PK046","fdf1adf0071c444ec897f638453f5d67","Rizal Kamaruzzaman","PK046","6","0","","5","14","67","5","0","4","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10059","PK047","00ea5c35f3381114e4471f36b26998e1","Mustofa","PK047","5","0","","6","KM 407 A","62","5","0","4","","0","0","3600","2","6","1");
INSERT INTO tbl_user VALUES("10060","PK048","064fa76b894021616335263a1c7fe7f2","Dian Ika Ningrum","PK048","6","0","9022-didi.jpg","19","55","110","5","0","2","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10061","PK049","712de2419663f92177fbcca44f2f2ca8","Sofi Ratna Furi","PK049","7","0","463-sofi.jpg","3","DEPARTEMENT BUSINESS DEVELOPMENT","15","5","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10062","PK050","343979a6222fcf5c4f50a8fd4ce710d1","Adya Kemara","PK050","6","0","","2","59","27","5","0","6","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10063","PK051","4f4ec923ed72d8d6ffee4f89f1e0e9c4","Rizalulloh","PK051","5","0","3163-rizalullah.jpg","5","Office","62","5","0","4","","0","0","3600","2","6","1");
INSERT INTO tbl_user VALUES("10064","PK052","64eb6f33d79221581bfe7df31d065889","Ardo Yudha Barnesa","PK052","7","0","8086-ardo.jpg","3","6","36","5","0","5","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10065","PK053","0d8b0770c8525638ea63cb1055070155","Melly Febriyanti","PK053","7","0","2881-melly.jpg","2","2","15","5","0","6","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10066","PK054","9276d8c623b5f0930f93cf07fae0845f","Angga Saputra","PK054","6","0","","0","Office","20","1","0","1","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10067","PK055","64fe947dde7170229d95af90ad6d9b68","Ayu Ratnasari","PK055","8","0","","5","13","72","5","0","5","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10068","PK056","6ca4d82fbd86555624995d113fde3833","Dicky Wahyu Pratama","PK056","8","0","","11","33","89","5","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10069","PK057","ae5318388db0dae818a4ddefd1560130","Muhamad Rizky Cahyadi","PK057","7","0","3509-iki.jpg","5","14","64","5","0","6","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10070","PK059","f5264fb5dd9e7a5f0625ead4cf99748a","Bimo Firizki Diadi","PK059","7","0","4776-bimo.jpg","4","10","54","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10071","PK061","bbf6eb76300e11c07204fcb6b37c592f","Bayu Budi Utomo","PK061","7","0","","7","20","68","5","0","4","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10072","PK062","9c33e65aa7f8d69effd6daaa3804c3d1","Nur Asty Pratiwi","PK062","7","0","7579-asty.jpg","4","10","50","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10073","PK063","487e7231a3d8a4c36226385643ea50e0","Sholahuddin Triwidinata","PK063","7","0","4759-soleh.jpg","5","13","68","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10074","PK064","75245224b08457412ade2c4bdebc14a4","Bukry Chamma Siburian","PK064","7","0","3158-bukry.jpg","5","13","68","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10075","PK065","b67923e5a6170f34c52e19086ea1aeed","Rizky Ehsy Pangarso","PK065","7","0","7580-kiki.jpg","2","3","17","5","0","6","","1","2","3600","2","9","0");
INSERT INTO tbl_user VALUES("10076","PK066","54a9676df022c0b88a9b43bba829add2","Latifah","PK066","7","0","419-lala.jpg","2","3","17","5","0","1","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10077","PK067","3046f57a2a27fdd1edece2fbb3c9ffae","Ramdani Adam","PK067","7","0","","3","6","82","5","0","5","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10078","PK069","a59eeaf48b22ebf1fee0b715731dc7ca","Arsindiany Alambago","PK069","6","0","","0","","","5","0","3","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10079","PK070","dc8734f7a1b8c973d64b78ca4d0b1121","Wega Tommy Dwi Pamungkas","PK070","8","0","","16","KM 64 A","72","5","0","4","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10080","PK071","ab47cbbc8714426e14ac62e2b8a8e81d","Nur Fitria Febriana","PK071","8","0","","5","14","65","5","0","6","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10081","PK072","6b62c56b6c78e81e262fc435b158f880","Mohamad Reza Pahlevi","PK072","7","0","2278-rezap.jpg","18","53","103","5","0","3","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10082","PK073","2e11e90565e64fb4a5b25af3a62044c1","Vishnu Damar Sasongko","PK073","5","0","7259-vishnu.jpg","18","51","96","5","0","3","","1","0","3600","2","6","0");
INSERT INTO tbl_user VALUES("10083","PK074","1f22e88f5a7dd6969531ddb66f3e828b","G. Heryawan Indrayatna","PK074","5","0","9899-indra.jpg","2","5","25","5","0","1","","1","0","3600","2","6","0");
INSERT INTO tbl_user VALUES("10084","PK075","dbfc021d832630aecab6a59665193b0f","Ario Seto","PK075","7","0","","15","44","70","5","0","3","","1","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10085","PK076","856adc13bd0c5999ed10315e300e76e3","Andi Afriansyah","PK076","8","0","","10","DEPARTEMENT BUSINESS DEVELOPMENT","78","5","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10086","PK077","2851d33a29f649700b256aeae59a506f","Lowig Caesar Sinaga","PK077","5","0","","8","26","62","5","0","4","","0","0","3600","2","6","1");
INSERT INTO tbl_user VALUES("10087","PK078","f02983334e62f0fe8cc08f8ad629cb47","Arif Rahman","PK078","6","0","","8","26","67","5","0","7","","0","0","3600","2","8","1");
INSERT INTO tbl_user VALUES("10088","PK079","4d81e61f13169060aaef7103749b888a","Antonius Catur Satriono","PK079","6","0","","6","17","67","5","0","7","","0","0","3600","2","8","1");
INSERT INTO tbl_user VALUES("10089","PK080","c11a2864e145cb5f0ec4ae89b12e390f","Agus Triwahyudi","PK080","7","0","","5","PROJECT ROYAL PANDAAN","68","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10090","PK083","2b1a48519736b7da7d581e9647443f09","Robby Nugraha","PK083","7","0","","13","Office","85","5","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10091","PK084","3cfab66abaf1adf0e948a6e53c599410","Tania Intan Sari","PK084","8","0","4060-tania.jpg","4","10","47","5","0","4","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10092","10041","6d38b80c1da3bd9d8717ce47fea2acd7","Kristiana Live Sonya","10041","6","0","4433-kristin.jpg","2","3","26","3","0","6","","1","0","3600","1","8","0");
INSERT INTO tbl_user VALUES("10093","10042","425f116bf53f051c57d1670a04fb4a0c","Slamet Purwanto","10042","5","0","9599-slamet.jpg","19","57","122","3","0","2","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10094","10043","d30cfe3deca3ec4de141fcf9c31097a3","Indri Kurnia Lestari","10043","5","0","","3","SEKSI PROPERTY DEVELOPMENT","34","3","0","5","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10095","10044","9c16b0e83f09596202f402261f25c8a9","Tisa Yuanita","10044","5","0","","2","4","18","3","0","6","","1","0","3600","1","6","0");
INSERT INTO tbl_user VALUES("10096","10045","997e65474a248252883b485717f7d098","Evil Ramadhani","10045","5","0","","4","SEKSI BUSINESS ENGINEERING & MAINTENANCE","55","3","0","4","","0","0","3600","1","6","1");
INSERT INTO tbl_user VALUES("10097","PK087","1d6fb7061bf8375a0317ff6cce6ee59f","Muhammad Rizaq Nuriz Zaman","PK087","8","0","","7","20","157","5","0","5","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10098","PK086","4603cf9abb94f77c71bc767ecea2333a","Syamsul Fadly","PK086","7","0","4054-syamsul.jpg","4","12","59","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10099","PK085","34b4f080b684b4105983b5c7d0ca04a0","Bayuaji Prabowo Nugroho","PK085","7","0","939-bayuaj.jpg","5","16","73","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10100","PK095","ed3230f53e8c255c8d2a29c3e04a559f","Sabila Adinda Puri Andarini","PK095","8","0","","19","55","115","5","0","2","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10101","10047","eccd9f7dc92858b741132fda313130cf","Yati Melasari","10047","11","0","7884-mela.jpg","19","55","109","3","0","2","","1","0","3600","1","7","0");
INSERT INTO tbl_user VALUES("10102","10052","d6f8d124087ad4c23fe66b89b7893523","Arief Hartono","10052","7","0","","12","KM 207 A","127","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10103","10054","bef4d169d8bddd17d68303877a3ea945","Yayang Supiar","10054","7","0","","12","48","127","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10104","10053","7fbfc161a3b873bf2119c788ed93d1f4","UJANG","10053","7","0","","12","Office","127","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10105","10055","e4191d610537305de1d294adb121b513","Rd. MOCHAMAD ERWIN SISWANTO","10055","7","0","","12","Office","127","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10106","10056","b59c21a078fde074a6750e91ed19fb21","DEDDY KHOIRUL ANAM","10056","7","0","","17","49","180","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10107","10057","27bc42aaeb1540e87949a69ebeb4eb4c","AGUS WINARTO","10057","7","0","","17","KM 725 A","71","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10108","10058","999df4ce78b966de17aee1dc87111044","MOCHAMAD SUBECHAN","10058","7","0","","15","KM 597 A","164","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10109","10059","e7ba053d8ba932b77348b3987ea0e40b","Adri Rachman","10059","7","0","","13","35","148","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10110","10060","e64928412aae022e2c27456df62dda09","Eko Hermansyah","10060","7","0","","13","35","17","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10111","10061","7fe3d16a83f683a0a7f1c029536bebe7","SUPARJO","10061","7","0","","13","35","17","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10112","10062","f892447540d0e840049183faa3109b1b","Juwadi","10062","7","0","","6","17","17","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10113","10063","c9f2f917078bd2db12f23c3b413d9cba","Fitri Handayani","10063","7","0","","10","SEKSI AREA CONTROL","17","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10114","10064","41bacf567aefc61b3076c74d8925128f","Sukandana","10064","7","0","","15","Office","17","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10115","10065","ffa4eb0e32349ae57f7a0ee8c7cd7c11","Suryo Subono","10065","7","0","","13","KM 407 A","15","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10116","10066","955fd82131e15e7b5199cbc8f983306a","Abdul Moeis Boedijono","10066","7","0","","15","KM 597 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10117","10067","792dd774336314c3c27a04bb260cf2cf","Jansen Jaya Rolas Hutagaol","10067","7","0","","13","KM 407 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10118","10068","a4982cba8b4cbeb32a439f0367273fc8","Hery Muryanto","10068","7","0","","15","KM 597 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10119","10069","530ad673015b98fcf4cdd5a68cb93d6c","Sigit Wahyu Ichtijar","10069","7","0","","13","Office","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10120","10070","1aab7baa714e14868fe9eac65fcbd315","Mulyato","10070","7","0","","15","Office","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10121","10071","4910fcdaedc2be5c5f05533b7a9cb8c2","M. Chairul Anam","10071","7","0","","14","KM 519 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10122","10072","cc2b1ba0368ccd98d5bed7e2e97b4bb0","Teddy Arriesandi","10072","7","0","","15","44","92","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10123","10073","657e31ff3231b847d7604f6647a2dfc9","Aries Askandar","10073","7","0","","7","20","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10124","10074","7e0ff37942c2de60cbcbd27041196ce3","Muhammad Arsyad","10074","7","0","","14","KM 519 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10125","10075","2e5050938e0df629a2f2c5ff24fe66c6","Dedy Sutikno","10075","7","0","","14","KM 519 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10126","10076","11ed516444b2593eaba7f2c2bb63483e","Edwin Andry Sumala","10076","7","0","","7","KM 519 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10127","10077","70803c1acb1ee113c07ec6bddc4929bd","Ismail","10077","7","0","","15","Office","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10128","10078","2754518221cfbc8d25c13a06a4cb8421","Afri Tri Haryono","10078","7","0","","8","KM 597 A","103","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10129","10079","96e76211d21b66fbdaf1a05498b4417a","Helmi Yunus","10079","7","0","","16","KM 64 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10130","10080","ebd774c929a7f6c7e5df19e355f61e23","Andri Munandar","10080","7","0","","21","64","180","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10131","10081","725215ed82ab6306919b485b81ff9615","Sudarmadi","10081","7","0","","21","KM 67 A","13","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10132","10082","9b22a40256b079f338827b0ff1f4792b","PRINS HANDOYO","10082","7","0","","21","64","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10133","10083","c5f79d384b8024d5adddb872f9651f38","Bakti Sihombing","10083","7","0","","21","KM 67 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10134","10084","c1aff6753244c6ee93d489992b51f012","Julpikar","10084","7","0","","21","64","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10135","10085","5e62c1998206e0110459a6143546fe2e","Rahmatul Aini","10085","7","0","","21","64","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10136","10086","6412121cbb2dc2cb9e460cfee7046be2","Supriadi","10086","7","0","","21","64","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10137","10087","afc2637129ad904485e07d2c0e6b0688","Rahmadi Panjaitan","10087","7","0","","21","64","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10138","10088","42edd1ec1dc5f5c1f11fd74a959e96c9","Aris Widodo","10088","7","0","","17","KM 725 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10139","10089","69f8ea31de0c00502b2ae571fbab1f95","Saiful","10089","7","0","","17","49","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10140","10090","4392e631da381761421d5e1e0c3de25f","Hery Wahyu Noertjahyo","10090","8","0","","17","49","91","4","0","7","","0","0","3600","2","10","1");
INSERT INTO tbl_user VALUES("10141","10091","b219f59c2dd596abfadbcecfc2277659","IWAN DHANI GUNAWAN","10091","7","0","","11","33","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10142","10092","c0c3a9fb8385d8e03a46adadde9af3bf","BUDI LUKMAN","10092","7","0","","11","KM 88 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10143","10093","ee51fce06e2c58e0cac874de44b57035","Dedi Kusnadi","10093","7","0","","11","KM 88 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10144","10094","018a1b6ccd2ec81361657e259155895a","Deni Catur Wardani","10094","7","0","","11","KM 88 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10145","10095","253d812cbfbb77c03b910f9897e9487d","Asep Sugiri","10095","7","0","","11","33","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10146","10096","ee4117572afbc0cf760f70714af0ec52","Boni Pasius Silalahi","10096","7","0","","11","33","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10147","10097","23b702c4c421ddb2d023fee968c0d839","DADAN KUSNIDAR","10097","7","0","","11","KM 88 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10148","10098","c876914f82ce54cb533b186afd41166e","Aa Dedih","10098","7","0","","11","KM 88 A","88","4","0","7","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10149","10099","995ca733e3657ff9f5f3c823d73371e1","Roni Yusnandar","10099","6","0","","19","55","111","3","0","2","","1","0","3600","1","8","0");
INSERT INTO tbl_user VALUES("10150","D0008","0630f67b2c1133eb96171a870d5147a9","Tita Paulina Purbasari","D0008","3","0","6682-tita.jpg","1","1","5","3","0","1","","1","0","3600","1","3","0");
INSERT INTO tbl_user VALUES("10151","D0009","0cd125dfbdbe9d67ada8ebd76246f41c","Dian Takdir Badrsyah","D0009","3","0","9529-dian takdir.jpg","1","1","6","2","0","1","","1","0","3600","2","3","0");
INSERT INTO tbl_user VALUES("10152","K0005","a29e39366bc75d66b57f8e2536fe9312","Donny Arsal","K0005","10","0","","0","0","1","1","0","1","","1","0","3600","1","1","0");
INSERT INTO tbl_user VALUES("10153","PK088","9952d201748ab302fa3b8952a4217eff","Arief Fauzi","PK088","6","0","6417-ariffauzi.jpg","18","50","100","5","0","3","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10154","PK089","e8d09acfaad3ecf09242168db4788494","Wahju Widodo","PK089","5","0","","5","15","62","5","0","4","","1","0","3600","2","6","0");
INSERT INTO tbl_user VALUES("10155","PK090","8e5878685b9379cb425d54b9c52e0239","Sofyan Wahyudi","PK090","8","0","","5","13","64","1","0","5","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10156","PK092","c6f3b2844dbaf9894dd271601421d43c","Arief rachman Eka Putra","PK092","7","0","","14","38","68","5","0","5","","0","0","3600","2","9","1");
INSERT INTO tbl_user VALUES("10157","PK093","73bf89e8747e82fb3b464a7461845aa2","Mohammad Rizal Syarief","PK093","6","0","","5","14","67","5","0","4","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10158","PK094","3828bedd5250e27b08033fa273cce461","Een Ahmadan Yoga Wilanda","PK094","7","0","","5","14","64","5","0","6","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10159","PK096","b0dc070f96ee8d600d2680e8329e1b29","Indah Susanti","PK096","6","0","1030-indah.jpg","2","4","19","5","0","6","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10160","PK097","fd788805739e13e3a728781093a5af22","Inggrid Vio Fernanda","PK097","8","0","","5","13","64","5","0","5","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10161","PK098","8596a6ac50e165aebcc1595c461eff24","Adia Puja Pradana","PK098","6","0","1258-adia.jpg","2","3","12","5","0","6","","1","0","3600","2","8","0");
INSERT INTO tbl_user VALUES("10162","PK099","27345d25923b27b503c6bc82a4232684","Rizqa Amalia","PK099","7","0","","5","15","63","5","0","6","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10163","PK100","228b37d4d7094a73064949d8b1837970","Nur Agus Rachmawan","PK100","8","0","","5","13","64","5","0","5","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10164","PK101","912eb7a48fadd35dac3d1bddc128bd16","Swanti","PK101","8","0","","5","15","64","5","0","6","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10165","PK104","167abe53c7adf82af922c36296c1f889","M. Syaiful Rifqi adi Khrisna","PK104","7","0","","5","15","70","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10166","PK105","5c922c1bf3889a3683229da959290436","Salma Jounarasti Hasniza","PK105","7","0","","3","7","36","5","0","1","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10167","PK106","29a4d75a5d500aa76dbae56082a17c76","Yuni Nurmaya","PK106","8","0","","5","13","65","5","0","6","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10168","PK107","6234e45cf0a69c9846ccf2df739b89db","Hasan Mauludi","PK107","8","0","","5","13","65","4","0","5","","1","0","3600","2","10","0");
INSERT INTO tbl_user VALUES("10169","PK058","624717d9f15d1bf3e5f94d27a1a515b1","Anang Daus Soemartri","PK058","7","0","9609-anang.jpg","3","9","43","5","0","5","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10170","PK091","e3dd589db435b6414ce32434460cc359","Fauzi Rachman Juang Pribadi","PK091","7","0","","5","15","69","5","0","4","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10171","PK103","28d3c0d6aeecdd362803440626770f52","Muhammad Nofi Risdianto","PK103","7","0","","5","13","68","5","0","1","","1","0","3600","2","9","0");
INSERT INTO tbl_user VALUES("10172","10004","d783823cc6284b929c2cd8df2167d212","Dian Agustian Hadi","10004","4","0","","18","50","95","3","0","3","","1","0","3600","1","4","0");
INSERT INTO tbl_user VALUES("10173","marketing","c769c2bd15500dd906102d9be97fdceb","Admin Marketing","0","1","0","","","","","4","0","6","","1","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10174","direktur","4fbfd324f5ffcdff5dbf6f019b02eca8","Admin Direktur","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10175","pengembangan","7111494d4869feeddd17652b086e0b67","Admin Pengembangan Bisnis","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10176","teknik","58029eb6d2dd138b3da6ee4b2bb71d8c","Admin Teknik","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10177","jmrbtip","498ab3e5fa941a600ac8b28da348791d","Admin TIP","0","1","0","","","","","0","0","0","","1","0","3600","0","0","0");
INSERT INTO tbl_user VALUES("10178","keuangan","a4151d4b2856ec63368a7c784b1f0a6e","Admin Keuangan","0","1","0","","","","","0","0","0","","0","0","3600","0","0","0");



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



