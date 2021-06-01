var str_price = function(num){
    var str = num.toString().replace("", ""), parts = false, output = [], i = 1, formatted = null;
    if(str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
    }
    str = str.split("").reverse();
    for(var j = 0, len = str.length; j < len; j++) {
        if(str[j] != ".") {
            output.push(str[j]);
            if(i%3 == 0 && j < (len - 1)) {
                output.push(".");
            }
            i++;
        }
    }
    formatted = output.reverse().join("");
    return("  " + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};

var str_slug = function(text){
    let str = text.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str = str.replace(/đ/g,"d");
    str = str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'|\;| |\"|\&|\#|\[|\]|~/g,"-");
    str = str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
    str = str.replace(/^\-+|\-+$/g,"");//cắt bỏ ký tự - ở đầu và cuối chuỗi
    return str;
}


var str_trim = function (string, charToRemove)
{
    string = string.trim();
    while(string.charAt(0) == charToRemove) {
        string = string.substring(1);
    }

    while(string.charAt(string.length-1) == charToRemove) {
        string = string.substring(0,string.length-1);
    }
    return string;
}

export {
    str_trim,
    str_price,
    str_slug
}