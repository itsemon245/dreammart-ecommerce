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
            <div className="px-3">
                <div className='w-full carousel carousel-center'>
                    {
                        eventProducts.map((product, index) => (
                            <div id={sectionName + index} key={index} className="carousel-item  w-full mt-10 justify-center scroll-mt-10">
                                <div className="flex flex-col gap-5 items-center">
                                    <h3 className='text-white font-semibold'>{subTitleArray[ 0 ] + " "}<span className='text-primary'>{subTitleArray[ 1 ]}</span></h3>
                                    <div className='flex gap-5 lg:gap-10 items-center justify-between '>
                                        <a className=''
                                            href={index !== 0 ? ("#" + sectionName + (index - 1)) : "#" + sectionName + lastIndex}><ArrowLeft />
                                        </a>
                                        <div className='flex flex-col gap-5 items-center sm:flex-row lg:gap-10'>
                                            <div className="relative">
                                                {/* image */}
                                                <img className='object-cover sm:aspect-square lg:aspect-auto rounded-md' src={useImage(product.image)} alt={product.name} />
                                                {/* headings */}
                                                <div className="absolute bottom-0 left-0 text-white bg-black bg-opacity-70 w-full rounded-b-md pl-3 sm:hidden">
                                                    <h2 className='font-semibold max-w-xs'>{product.name}</h2>
                                                    <h3 className=''>Category : {product.category.name}</h3>
                                                </div>
                                            </div>
                                            {/* details */}
                                            <div className='text-white mb-3'>
                                                <div className="hidden sm:block">
                                                    <h2 className='font-semibold max-w-xs'>{product.name}</h2>
                                                    <h3 className='mb-3'>Category : {product.category.name}</h3>
                                                    <p className='font-light max-w-[100ch] md:hidden'>
                                                        {product.detail.slice(0, 100) + "..."}
                                                    </p>
                                                    <p className='font-light max-md:hidden max-w-[100ch]'>
                                                        {product.detail}
                                                    </p>
                                                </div>

                                                <Link href={route('browse.product', product.id)}
                                                    className="mt-5 btn btn-primary max-sm:btn-sm  text-base-100 capitalize">Get Yours Now</Link>
                                            </div>
                                        </div>
                                        <a className=''
                                            href={index !== lastIndex ? ("#" + sectionName + (index + 1)) : "#" + sectionName + 0}><ArrowRight />
                                        </a>
                                    </div>
                                    <Link
                                        className="link link-primary">
                                        View More
                                    </Link>
                                </div>
                            </div>
                        ))
                    }
                </div>
            </div>



        </div>
    )
}
