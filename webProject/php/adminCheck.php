<?php
    include_once "./inc/_head.php";

    $id = htmlspecialchars($_GET["id"]);
    $page = htmlspecialchars($_GET['page']);
    $mode = htmlspecialchars($_GET['mode']);
?>
<div class="container">
    <div class="content row">
		
        <?php include_once "./inc/_nav.php"; ?>

        <div class="col-10">

            <form action="adminCheckDo.php" method="POST" id="passwd_form">
                <div class="pass_title">
					<h2>관리자 확인</h2>
					<br>
                    관리자 전용 비밀번호를 입력해주세요.
                </div>

                <div class="pass_input">
                    <input type="password" name="bb_passwd" required />
                    <input type="hidden" name="id" value="<?=$id?>" />
                    <input type="hidden" name="page" value="<?=$page?>" />
                    <input type="hidden" name="mode" value="<?=$mode?>" />
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">확인</button>
                    <a href="./" class="btn btn-primary">뒤로</a>
                </div>
            </form>
        </div>
    </div>
</div>