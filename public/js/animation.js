// const ratio = .1

// const options = {
//     root: null,
//     rootMargin: '0px',
//     threshold: ratio
// }

// // reveal-left

// const handleIntersecLleft = function (entries, observer) {
//     entries.forEach(function (entry) {
//         if (entry.intersectionRatio > ratio){
//             entry.target.classList.add('reveal-left-video-visible')
//             console.log('is visible')
//         }
//         else {
//             console.log('not visible')
//         }
//     })
// }

// const observer = new IntersectionObserver(handleIntersectLeft, options)
// document.querySelectorAll('.reveal-left-video').forEach( function (r) {
//     observer.observe(r)
// })


// reveal-right

// const handleIntersectRight = function (entries, observer) {
//     entries.forEach(function (entry) {
//         if (entry.intersectionRatio > ratio){
//             entry.target.classList.add('reveal-right-visible')
//             console.log('is visible')
//         }
//         else {
//             console.log('not visible')
//         }
//     })
// }

// const observer = new IntersectionObserver(handleIntersectRight, options)
// document.querySelectorAll('.reveal-right').forEach( function (r) {
//     observer.observe(r)
// })