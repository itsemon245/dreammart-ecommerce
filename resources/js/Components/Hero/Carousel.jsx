import React from 'react'

export default function Carousel({ img1, img2, img3 }) {
    return (
        <>
            <div className="carousel carousel-center max-w-md p-4 space-x-4 rounded-box">
                <div id='item1' className="carousel-item w-full justify-center">
                    <img src={img1} className="rounded-box w-44 object-contain" />
                </div>
                <div id='item2' className="carousel-item w-full justify-center">
                    <img src={img2} className="aspect-square object-contain w-44" />
                </div>
                <div id='item3' className="carousel-item w-full justify-center">
                    <img src={img3} className="rounded-box object-contain w-44" />
                </div>
            </div>
            <div className="flex justify-center w-full py-2 gap-2">
                <a href="#item1" className="btn btn-xs">1</a>
                <a href="#item2" className="btn btn-xs">2</a>
                <a href="#item3" className="btn btn-xs">3</a>
            </div>
        </>
    )
}
