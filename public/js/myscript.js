// expand and collapse on click
$(".header").click(function () {
    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(300, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        // $header.text(function () {
        //     //change text based on condition
        //     return $content.is(":visible") ? "Collapse" : "Expand";
        // });
    });
});
