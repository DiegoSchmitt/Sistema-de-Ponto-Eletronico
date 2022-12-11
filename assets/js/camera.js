var video = document.querySelector('video')

navigator.mediaDevices.getUserMedia({video:{width:280, height:300}})
.then(stream => {
    video.srcObject = stream
    video.play()
})
.catch(error => {
    console.log(error)
})

document.querySelector('#selfie').addEventListener('click', () => {
    var canvas = document.querySelector('canvas')
    canvas.height = video.videoHeight
    canvas.width = video.videoWidth
    var context = canvas.getContext('2d')
    context.drawImage(video, 0, 0)
    let img = document.querySelector('#photo')
    img.value = canvas.toDataURL()

    console.log(canvas)

})
