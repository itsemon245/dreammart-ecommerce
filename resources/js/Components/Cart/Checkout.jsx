import React, { useState } from "react";
function Checkout({ userId, items }) {

    const [show, setShow] = useState(false);
    const subTotal = Number(items.map(item => item.price).reduce((prev, next) => prev + next).toFixed(2));
    const shipping = 10
    const getQty = (item) => {
        const qty = item.carts.find(cart => cart.user_id === userId).qty
        return qty
    }
    return (
        <>
            <div>
                <div className="flex items-center justify-center py-8">
                    <button onClick={() => setShow(!show)} className="py-2 px-10 rounded bg-primary hover:bg-indigo-700 text-slate-900 hover:text-white transition-all">
                        Checkout All
                    </button>
                </div>
                {show && (
                    <div className="absolute top-[50%] z-20 left-[50%] translate-x-[-50%] translate-y-[-50%]" id="chec-div">
                        <div className="" id="checkout">
                            <div className="flex md:flex-row flex-col justify-end" id="cart">
                                <div className="lg:w-1/2 w-full md:pl-10 pl-4 pr-10 md:pr-4 md:py-12 py-8 bg-base-300 overflow-y-auto shadow-md overflow-x-hidden h-screen" id="scroll">
                                    <div className="flex items-center text-gray-500 hover:text-gray-600 cursor-pointer" onClick={() => setShow(!show)}>
                                        <svg xmlns="http://www.w3.org/2000/svg" className="icon icon-tabler icon-tabler-chevron-left" width={16} height={16} viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" fill="none" strokeLinecap="round" strokeLinejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="15 6 9 12 15 18" />
                                        </svg>
                                        <p className="text-sm pl-2 leading-none">Back</p>
                                    </div>
                                    <p className="text-5xl font-black leading-10 pt-3">Cart</p>
                                    {items.map(item => (
                                        <div key={item.id} className="md:flex items-center py-8 border-t border-gray-200">
                                            <div className="w-1/4">
                                                <img src={`/storage/${item.image}`} alt={item.name} className="w-full h-full object-center object-cover" />
                                            </div>
                                            <div className="md:pl-3 md:w-3/4 w-full">
                                                <div className="flex items-center justify-between w-full pt-1">
                                                    <div className="flex gap-5 justify-between px-3">
                                                        <p className="text-base font-black leading-none ">{item.name}</p>
                                                        <p className="text-base font-black leading-none ">x <span className="text-primary">{getQty(item)}</span></p>

                                                    </div>
                                                </div>
                                                <p className="text-xs leading-3 text-gray-600 pt-2">Category: {item.category.name}</p>
                                                <p className="text-xs leading-3 text-gray-600 py-4">Brand: {item.brand.name}</p>

                                                <div className="flex items-center justify-between pt-5 pr-6">

                                                    <p className="ml-auto text-base font-semibold leading-none ">
                                                        {`$${item.price} x ${getQty(item)}`}
                                                        <span className="text-primary"> = ${item.price * getQty(item)}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                                <div className="xl:w-1/2 md:w-1/3 xs:w-1/4 w-full bg-base-200 shadow-lg shadow-gray-900 h-full">
                                    <div className="flex flex-col md:h-screen px-14 py-20 justify-between overflow-y-auto">
                                        <div>
                                            <p className="text-4xl font-black leading-9 ">Summary</p>
                                            <div className="flex items-center justify-between pt-16">
                                                <p className="text-base leading-none ">Subtotal</p>
                                                <p className="text-base leading-none ">${subTotal}</p>
                                            </div>
                                            <div className="flex items-center justify-between pt-5">
                                                <p className="text-base leading-none ">Shipping</p>
                                                <p className="text-base leading-none ">${shipping}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div className="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                                                <p className="text-2xl leading-normal ">Total</p>
                                                <p className="text-2xl font-bold leading-normal text-right ">${subTotal + shipping}</p>
                                            </div>
                                            <button onClick={() => setShow(!show)} className="btn btn-primary w-full rounded">
                                                Checkout
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                )}
            </div>

            <style>
                {` /* width */
                #scroll::-webkit-scrollbar {
                    width: 1px;
                }

                /* Track */
                #scroll::-webkit-scrollbar-track {
                    background: #f1f1f1;
                }

                /* Handle */
                #scroll::-webkit-scrollbar-thumb {
                    background: rgb(133, 132, 132);
                }
`}
            </style>
        </>
    );
}

export default Checkout;
