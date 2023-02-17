import React from 'react'
import Carousel from './Carousel'
import { BiCategory } from 'react-icons/bi'
import { SearchBox } from "../"
import { Link } from '@inertiajs/inertia-react'
import route from '/vendor/tightenco/ziggy/src/js'

export default function Hero({ carouselImages }) {
    return (
        <div className="hero min-h-screen z-[-1] text-white">
            <div className="hero-content py-0 flex-col sm:flex-row-reverse xl:gap-x-32 lg:gap-x-16 md:gap-x-5 gap-x-2">
                <div className="hero-images hidden sm:inline-grid grid-cols-2">
                    <div className="lg:w-52 sm:w-36  lg:translate-y-5 lg:-translate-x-5 aspect-square">
                        <img loading='lazy' src="/assets/img/hero/hero-controller.png" alt="Hero Controller" className='w-100 aspect-square' />
                    </div>
                    <div className="sm:w-32  lg:w-48 lg:translate-y-5 lg:translate-x-5 aspect-square">
                        <img loading='lazy' src="/assets/img/hero/hero-watch.png" alt="Hero Watch" className='w-100 aspect-square' />
                    </div>
                    <div className="sm:w-44 lg:w-80 lg:-translate-y-12 -translate-y-5 aspect-square col-span-2 -rotate-12 mx-auto">
                        <img loading='lazy' src="/assets/img/hero/hero-shoe.png" alt="Hero Shoe" className='w-100 aspect-square' />
                    </div>
                </div>
                <div className=" block sm:hidden">
                    <Carousel carouselImages={carouselImages}></Carousel>
                </div>
                <div>
                    <h1 className="font-bold xl:text-5xl md:text-2xl text-xl max-w-[18ch]  break-words">Quality, <span className='text-primary'>Style</span> &
                        Simplicity</h1>
                    <p className="lg:py-6 py-3 lg:max-w-[45ch] max-w-[32ch]">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <div className='flex gap-5'>
                        <Link href={route('browse.all')} className="btn sm:btn-md btn-sm capitalize 2xl:btn-lg btn-primary flex sm:gap-x-3 gap-x-1 items-center justify-center">
                           <BiCategory className='w-6 h-6'></BiCategory> Explore
                        </Link>
                        {/* <SearchBox></SearchBox> */}
                    </div>
                </div>
            </div>
        </div>
    )
}
