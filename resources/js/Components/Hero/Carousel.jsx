import React, { useEffect } from 'react'

export default function Carousel({ carouselImages }) {
    return (
        <>
            <div className="carousel carousel-center max-w-md p-4 space-x-4 rounded-box">
                {carouselImages.map((image, index) => (
                    <div id={'item' + index} key={index} className="carousel-item w-full justify-center">
                        <img loading='lazy' src={image.src} alt={"carousel " + image.name} className="rounded-box w-44 object-contain" />
                    </div>
                ))}

            </div>
            <div className="flex justify-center w-full py-2 gap-2">
                {carouselImages.map((value, index) => (
                    <a href={'#item' + index} key={index} className="btn btn-xs">{++index}</a>
                ))}
            </div>
        </>
    )
}
