document.write("<br>問1<br>");

for (var i = 1; i <= 5; i++) {
    document.write("★");
}
document.write("<br>");

document.write("<br>問2<br>");

for (var i2 = 1; i2 <= 2; i2++) {
    for (var star1 = 1; star1 <= 3; star1++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>問3<br>");

for (var i3 = 1; i3 <= 2; i3++) {
    for (var star2 = 1; star2 <=5; star2++) {
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>問4<br>");

for (var i4 = 1; i4 <=4; i4++) {
    for (var star3 = 1; star3 <= 5; star3++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>問5<br>");

for (var i5 = 1; i5 <= 4; i5++) {
    for (var star4 = 1; star4 <= 3; star4++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>問6<br>");

for (var i6 = 1; i6 <= 3; i6++) {
    for (var star5 = 0; star5 <= 2; star5++) {
        if (star5 % 2 == 1) {
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>問7<br>");

for (var i7 = 1; i7 <= 4; i7++) {
    for (var star6 = 0; star6 <= 4; star6++) {
        if (star6 % 3 == 2) {
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>問8<br>");

for (var i8 = 1; i8 <= 5; i8++) {
    for (var star7 = 0; star7 < i8; star7++) {
        document.write("★");
    }
    document.write("<br>");
}