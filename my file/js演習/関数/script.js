document.write("<br>問1<br>");

document.write("<br>");

function menseki(hannkei) {
    return hannkei * hannkei * 3.14;
}
document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));
document.write("<br>");



document.write("<br>問2<br>");

document.write("<br>");

function price(ABC, adult, child) {
    return ABC + "グループの合計金額は" + (adult * 500 + child * 200) + "円です。";
}
document.write(price("A", 2, 4));
document.write("<br>");
document.write(price("B", 1, 5));
document.write("<br>");
document.write(price("C", 3, 7));
document.write("<br>");