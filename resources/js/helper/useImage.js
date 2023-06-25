export default (image) => {
    return image.indexOf('uploads/') > -1 ? "/storage/" + image : image
}