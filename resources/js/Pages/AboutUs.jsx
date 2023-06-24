import React from 'react'
import { Link, Head } from '@inertiajs/inertia-react';
import CommonLayout from '@/Layouts/CommonLayout';

export default function AboutUs({ auth, categories }) {
    return (
        <CommonLayout categories={categories} pageTitle="About" auth={auth}>
            <div className="2xl:mx-auto 2xl:container flex justify-center items-center   md:py-12 py-9 xl:px-20 sm:px-6 px-4 mb-10">
                <div className=" xl:w-auto md:flex hidden flex-col space-y-6 xl:space-y-0 xl:flex-row justify-center items-center">
                    <div className="flex  justify-between w-full   items-center space-x-6 xl:space-x-8 ">
                        <div className="flex justify-center items-center">
                            <img className src="https://i.ibb.co/YDKkv5H/heather-ford-5gk-Ysr-H-eb-Y-unsplash-1.png" alt="shoes and clothes" />
                        </div>
                        <div className="flex flex-col justify-between  xl:mt-0  items-center space-y-6  xl:space-y-8">
                            <div className="flex flex-col xl:flex-row justify-between h-full xl:justify-center items-center space-y-8 xl:space-y-0 xl:space-x-8">
                                <div className="md:w-72 mx-1 md:h-64 lg:mt-4 xl:mt-0  flex flex-col justify-center items-center text-center">
                                    <p className=" text-3xl xl:text-4xl font-semibold  leading-7 xl:leading-9 text-center text-gray-200">Our Facebook</p>
                                    <p className=" text-base leading-6 mt-3 text-center text-gray-400">Follow us on facebook and tag us to get featured on our timeline</p>
                                    <a href="javascript:void(0)" className="focus:outline-none mt-4 focus:underline text-base leading-4 hover:underline text-center text-gray-200">
                                        @facebook
                                    </a>
                                </div>
                                <div className=" ">
                                    <img className="hidden xl:block" src="https://i.ibb.co/XYPJ0pQ/nordwood-themes-Nv4-QHk-TVEa-I-unsplash-1.png" alt="jewellery" />
                                    <img className="xl:hidden" src="https://i.ibb.co/b51F6gj/nordwood-themes-Nv4-QHk-TVEa-I-unsplash-1-1.png" alt="shoes and clothes" />
                                </div>
                            </div>
                            <div className="hidden xl:flex flex-row justify-center  items-center space-x-6 xl:space-x-8">
                                <div className>
                                    <img className src="https://i.ibb.co/FD9ZHbF/camilla-carvalho-Y9dc-Qp-OIMHQ-unsplash-1.png" alt="jewellery" />
                                </div>
                                <div className>
                                    <img className src="https://i.ibb.co/KxxFD8R/jonathan-francisca-YHbcum51-JB0-unsplash-1.png" alt="watch" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className=" xl:hidden flex flex-row justify-between   space-x-6 xl:space-x-8">
                        <div className>
                            <img className src="https://i.ibb.co/FD9ZHbF/camilla-carvalho-Y9dc-Qp-OIMHQ-unsplash-1.png" alt="jewellery" />
                        </div>
                        <div className>
                            <img className src="https://i.ibb.co/KxxFD8R/jonathan-francisca-YHbcum51-JB0-unsplash-1.png" alt="watch" />
                        </div>
                    </div>
                </div>
                {/* mobile responsive */}
                <div className="md:hidden flex justify-center items-center flex-col">
                    <div className="w-80  flex flex-col justify-center items-center text-center">
                        <p className=" text-3xl lg:text-4xl font-semibold  leading-7 lg:leading-9 text-center text-gray-200">Our facebook</p>
                        <p className=" text-base leading-6 mt-3 text-center text-gray-400">Follow us on facebook and tag us to get featured on our timeline</p>
                        <a href="javascript:void(0)" className="focus:outline-none mt-4 focus:underline text-base leading-4 hover:underline text-center text-gray-200">
                            @facebook
                        </a>
                    </div>
                    <div className="mt-8 flex flex-col justify-center space-y-4">
                        <img src="https://i.ibb.co/dpQZWPz/heather-ford-5gk-Ysr-H-eb-Y-unsplash-1.png" alt="shoes and clothes" />
                        <img src="https://i.ibb.co/b51F6gj/nordwood-themes-Nv4-QHk-TVEa-I-unsplash-1-1.png" alt="shoes and clothes" />
                        <img src="https://i.ibb.co/2c03gv4/camilla-carvalho-Y9dc-Qp-OIMHQ-unsplash-1.png" alt="jewellery" />
                        <img src="https://i.ibb.co/PDMYNxh/jonathan-francisca-YHbcum51-JB0-unsplash-1.png" alt="watch" />
                    </div>
                </div>
            </div>



            <div className=" 2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
                <div className=" text-center">
                    <h2 className=" font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-gray-200 md:w-full w-9/12 mx-auto">Follow Us on Instagram</h2>
                    <p className=" font-normal text-base leading-6 text-gray-400 mt-4 lg:w-5/12 md:w-9/12 mx-auto">
                        Follow us on instagram @<span className="underline cursor-pointer">followuspleaseee</span> and tag us to get featured on our timeline
                    </p>
                </div>
                <div className=" grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:grap-8 md:gap-6 gap-4 mt-10">
                    <div className="relative group">
                        <img src="https://i.ibb.co/QHS8Ngp/pexels-alana-sousa-3294250-1.png" alt="A picture of a sitting dog" className=" lg:block hidden w-full " />
                        <img src="https://i.ibb.co/mNPBgQN/pexels-alana-sousa-3294250-1-1.png" alt="A picture of a sitting dog" className="lg:hidden block w-full " />
                        <div className=" flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-200 via-gray-200 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full" />
                        <div className=" absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                            <svg width={64} height={64} viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M44 20V20.001" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div className="relative group">
                        <img src="https://i.ibb.co/T8jgRy3/pexels-leah-kelley-1449667-1.png" alt="Smiling Girl" className=" lg:block hidden w-full " />
                        <img src="https://i.ibb.co/YD8nNMR/pexels-leah-kelley-1449667-1-1.png" alt="Smiling Girl" className="lg:hidden block w-full " />
                        <div className="opacity-0 bg-gradient-to-t from-gray-200 via-gray-200 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full" />
                        <div className=" absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                            <svg width={64} height={64} viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M44 20V20.001" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div className="relative group">
                        <img src="https://i.ibb.co/F3dzNWD/pexels-spencer-selover-775358-1.png" alt="Men Posing" className=" lg:block hidden w-full " />
                        <img src="https://i.ibb.co/myWxfSm/pexels-spencer-selover-775358-1-1.png" alt="Men Posing" className="lg:hidden block w-full " />
                        <div className="opacity-0 bg-gradient-to-t from-gray-200 via-gray-200 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full" />
                        <div className=" absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                            <svg width={64} height={64} viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M44 20V20.001" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div className="relative group">
                        <img src="https://i.ibb.co/DwcwgDP/pexels-chevanon-photography-1108099-1.png" alt="2 puppies" className=" lg:block hidden w-full " />
                        <img src="https://i.ibb.co/5cDQZ2r/pexels-chevanon-photography-1108099-1-1.png" alt="2 puppies" className="lg:hidden block w-full " />
                        <div className="opacity-0 bg-gradient-to-t from-gray-200 via-gray-200 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full" />
                        <div className=" absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                            <svg width={64} height={64} viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                                <path d="M44 20V20.001" stroke="white" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </CommonLayout>
    )
}
