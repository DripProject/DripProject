const ratio = 0.2
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
            
}
const handleIntersect = function(entries,observer){
    entries.forEach(function (entry){
        if(entry.intersectionRatio > ratio){
            
            entry.target.classList.add('Jstransit-appear','Jstransit2-appear')
            observer.unobserve(entry.target)

        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options)
document.querySelectorAll('.Jstransit').forEach(function(j){
    observer.observe(j)
})
document.querySelectorAll('.Jstransit2').forEach(function(k){
    observer.observe(k)
})
























