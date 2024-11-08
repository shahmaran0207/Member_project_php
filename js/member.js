document.addEventListener("DOMContentLoaded", ()=>{
    const btn_member=document.querySelector('#btn_member');

    btn_member.addEventListener("click", ()=>{
        const check_member1=document.querySelector('#check_member_1');
        const check_member2=document.querySelector('#check_member_2');

        if(check_member1.checked !== true || check_member2.checked !== true){
            alert("회원 약관에 동의해주셔야 가입이 가능합니다.");
            return false;
        }

        const f=document.stipulation_form
        f.chk.value=1
        f.submit()
    })
})