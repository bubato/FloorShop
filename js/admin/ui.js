const listTab = ["tab_dashboard", "tab_sp_add", "tab_sp_edit", "tab_sp_del"];
function openTab(tab) {
    listTab.forEach(Item => {
    	Id(Item).style.display = "none";
    });
    Id("tab" + tab).style.display = "block";
}

function Id(text) {
    return document.getElementById(text);
}