<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/cuongpv/school/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Cập nhật thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN GIÁO VIÊN</h1>
	<h2>Sửa thông tin giáo viên :</h2>
</header>

<form method="post" action="">
	<label for="name">Họ tên :</label>
	<input type="text" name="name" value="<?php echo isset($giaovien['teacher'])?$giaovien['teacher']:'';?>"/>

	<label for="lop">Lớp phụ trách :</label>
	<input type="text" name="lop" value="<?php echo isset($giaovien['lop'])?$giaovien['lop']:'';?>"/>

	<input type="submit" name="edit" id="button" value="Edit"/>
	<input type="submit" name="back" id="button" value="Back"/>
</form>
</body>
</html>