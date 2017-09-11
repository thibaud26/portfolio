function hideAside() {
    if (state == "open") {
    $(".aside-leftCreations").addClass("asideCache");/* ferme le aside */
    $(".warpper")[0].style.fontSize="300%";
    state = "close";
    } else {
    $(".aside-leftCreations").removeClass("asideCache"); /* ouvre le aside */
    $(".warpper")[0].style.fontSize="200%";
    state = "open";
    }
}
