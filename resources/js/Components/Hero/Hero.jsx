import React from 'react'

export default function Hero() {
    return (
        <div>
            <div className="hero min-h-screen">
                <div className="hero-content py-0 flex-col lg:flex-row-reverse">
                    <div className="hero-images grid grid-flow-row grid-cols-2">
                        <img src="/assets/hero-device.png" className="" />
                        <img src="/assets/hero-wearable.png" className="" />
                        <img src="/assets/hero-shoe.png" className=" mx-auto col-span-2 rotate-[-19.5deg]" />
                    </div>
                    <div>
                        <h1 className="text-5xl font-bold">Box Office News!</h1>
                        <p className="py-6 max-w-[60ch]">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <button className="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            <div className="hero min-h-screen">
                <div className="hero-content flex-col lg:flex-row">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" className="max-w-md rounded-lg shadow-2xl" />
                    <div>
                        <h1 className="text-5xl font-bold">Box Office News!</h1>
                        <p className="py-6 max-w-[60ch]">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <button className="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    )
}
