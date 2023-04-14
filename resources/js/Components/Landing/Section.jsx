import React from 'react'
import { ArrowLeft, ArrowRight } from '../';
import { Link } from '@inertiajs/inertia-react';
import route from '/vendor/tightenco/ziggy/src/js';
import { ArrowRightIcon } from '@heroicons/react/24/outline';
import useImage from '@/helper/useImage';

export default function Section({ eventProducts, heading, subTitle }) {
    let lastIndex = eventProducts.length - 1
    let sectionTitle = heading.split(" ")
    let coloredTitle = sectionTitle.pop()
    let subTitleArray = subTitle.split(" ")
    let sectionName = subTitleArray.join("-").toLowerCase()
    return (
        <div className='mb-20'>
            <h2 className='font-bold xl:text-3xl md:text-2xl text-xl text-center tracking-wide text-white'>{sectionTitle.join(" ") + " "}<span className='text-primary'>{coloredTitle}</span></h2>
            <div className="container-lg px-10">
                <div className='w-full carousel carousel-center'>
                    {
                        eventProducts.map((product, index) => (
                            <div id={sectionName + index} key={index} className="carousel-item w-full mt-10 flex items-center justify-between lg:grid lg:grid-cols-7 lg:place-items-center ">
                                <h3 className='col-span-7 mr-auto font-medium xl:text-2xl md:text-xl tracking-wide mt-4 lg:mt-8 text-white'>{subTitleArray[ 0 ] + " "}<span className='text-primary'>{subTitleArray[ 1 ]}</span></h3>
                                <a className='lg:col-span-1'
                                    href={index !== 0 ? ("#" + sectionName + (index - 1)) : "#" + sectionName + lastIndex}><ArrowLeft></ArrowLeft></a>
                                <div className='flex lg:gap-20 lg:col-span-5 flex-col lg:flex-row gap-4'>
                                    <div className={`w-80 aspect-square bg-no-repeat bg-contain flex items-center justify-center`}>
                                        <img className='w-full rounded-xl shadow-lg shadow-gray-900 hover:shadow-black hover:scale-105 transition-all' src={useImage(product.image)} alt={product.name} />
                                    </div>
                                    <div className='text-white'>
                                        <h2 className='font-semibold xl:text-3xl md:text-2xl text-xl max-w-xs'>{product.name}</h2>
                                        <h3 className='font-medium'>Category : {product.category.name}</h3>
                                        <p className='text-base my-3 tracking-wide w-[30ch]'>
                                            {product.detail}
                                        </p>
                                        <p className='text-primary font-medium'>Starting From ${product.price}</p>
                                        <Link href={route('browse.product', product.id)}
                                            className="mt-1 btn btn-primary text-base-100 capitalize">Get Yours Now</Link>
                                    </div>
                                    <Link
                                        className="lg:hidden mt-5 w-42 self-center btn btn-outline btn-primary capitalize">
                                        View More <ArrowRightIcon className='font-bold text-primary w-6 h-6 inline'></ArrowRightIcon>
                                    </Link>
                                </div>
                                <a className='lg:col-span-1'
                                    href={index !== lastIndex ? ("#" + sectionName + (index + 1)) : "#" + sectionName + 0}><ArrowRight></ArrowRight></a>
                                <Link href={`/page/${product.event.slug}/${product.event.id}`}
                                    className="hidden lg:inline-flex gap-3 lg:col-span-7 mt-16 btn btn-outline btn-primary capitalize">
                                    View More <ArrowRightIcon className='font-bold text-primary w-6 h-6 inline'></ArrowRightIcon>
                                </Link>
                            </div>
                        ))
                    }
                </div>
            </div>



        </div>
    )
}
