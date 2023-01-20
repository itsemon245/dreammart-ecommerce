import React from 'react'

export default function Hero() {
    return (
        <div className="hero min-h-min mt-20 z-[-1] text-white">
            <div className="hero-content py-0 flex-col lg:flex-row-reverse">
                <div className="hero-images inline-grid grid-cols-2">
                    <div className="lg:w-52  lg:translate-y-5 lg:-translate-x-5 aspect-square">
                        <img src="assets/hero-controller.png" alt="Hero Controller" className='w-100 aspect-square' />
                    </div>
                    <div className="  lg:w-48 lg:translate-y-5 lg:translate-x-5 aspect-square">
                        <img src="assets/hero-watch.png" alt="Hero Watch" className='w-100 aspect-square' />
                    </div>
                    <div className=" lg:w-80 lg:-translate-y-12 aspect-square col-span-2 -rotate-12 mx-auto">
                        <img src="assets/hero-shoe.png" alt="Hero Shoe" className='w-100 aspect-square' />
                    </div>
                </div>
                <div>
                    <h1 className="font-bold lg:text-5xl leading-[68px] lg:max-w-[360px]  break-words">Quality, <span className='text-primary'>Style</span> &
                        Simplicity</h1>
                    <p className="py-6 max-w-[45ch]">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button className="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>
    )
}
