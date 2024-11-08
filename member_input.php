<?php

if(!isset($_POST['chk']) || $_POST['chk'] != 1){
    die("<script>
            alert('약관 등을 동의 후 접근 바랍니다.');
            self.location.href='./stipulation.php';
        </script>

");
}

include 'inc_header.php';
?>

<main class="w-50 mx-auto border rounded-5 p-5">
    <h1 class="text-center">회원가입</h1>
    <div>
        <label for="f_id" class="form-label">아이디</label>
        <input type="email" class="form-control" id="f_id" placeholder="아이디">
    </div>
</main>

<?php
include 'inc_footer.php';

?>
