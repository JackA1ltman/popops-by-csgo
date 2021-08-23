//该文件用于指明弹窗ID名称
/*
 * 函数：itemPopupsOpen - 用于开启窗口
 * 函数：itemPopupsClose - 用于关闭窗口
 * ID：itemPopupsWindow - 当前弹出窗口本体
 * ID：itemPopupsBackground - 当前弹窗的背景 */

var popupsWindow = document.getElementById("popupsWindow");
var popupsBackground = document.getElementById("popupsBackground");

function popupsOpen() {
    popupsWindow.style.display = "block";
    popupsBackground.style.display = "block";
    // 开启窗口
}
function popupsClose() {
    popupsWindow.style.display = "none";
    popupsBackground.style.display = "none";
    // 关闭窗口
}

//-----------------------------------------------------------

var itemPopupsWindow = document.getElementById("itemPopupsWindow");
var itemPopupsBackground = document.getElementById("itemPopupsBackground");

function itemPopupsOpen() {
    itemPopupsWindow.style.display = "block";
    itemPopupsBackground.style.display = "block";
    // 开启窗口
}
function itemPopupsClose() {
    itemPopupsWindow.style.display = "none";
    itemPopupsBackground.style.display = "none";
    // 关闭窗口
}