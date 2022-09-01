function ScrollToNextSection(event) {
    let parent = event.target.closest('section');
    var element = parent.nextSibling.nextSibling;
// smooth scroll to element and align it at the bottom
    element.scrollIntoView({behavior: 'smooth', block: 'start'});
}