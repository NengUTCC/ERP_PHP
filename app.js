var username =  prompt('คุณคือใคร');
    //==,=== ทั้งข้อมูล,|=,|== ไม่เหมือนทั้งข้อมูล,<=,>=,<,>
if (username === 'admin') {
    document.write ('<p>คุณคือ admin</p>');
}
else if (username === 'user') {
    document.write('<p>คุณคือ user</p>');
}
else {
    document.write ('<p>คุณไม่ใช่ผู้ใช้งาน</p>');
    document.write (username);
}