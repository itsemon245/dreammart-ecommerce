export default (image) => {
    return image.indexOf('uploads/') === true ? "/storage/" + image : image
}