import { Link } from "@inertiajs/inertia-react";
import React, { useState } from "react";
import route from "/vendor/tightenco/ziggy/src/js";


function OrderTable({ orders }) {
    const getColor = (key) => {
        let color
        switch (key) {
            case 'completed':
                color = 'badge-success'
                break;
            case 'shipped':
                color = 'badge-secondary'
                break;
            case 'pending':
                color = 'badge-warning'
                break;
            default:
                break;
        }
        return color
    }

    const getDate = (date) => {
        let months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ]
        let d = new Date(date);
        let day = d.getDate()
        let month = months[d.getMonth()]
        let year = d.getFullYear()

        return day + " " + month + ", " + year
    }

    return (
        <>
            <div className="w-full sm:px-6">
                <h3 className="text-lg font-bold text-center">Orders</h3>
                <div className=" shadow pt-4 md:pt-7 pb-5 overflow-y-auto">

                    <table className="table w-full">

                        <thead>
                            <tr className="h-16 w-full text-sm leading-none">
                                <th className="font-normal text-left pl-4">#</th>
                                <th className="font-normal text-left pl-12">Order Info</th>
                                <th className="font-normal text-left pl-20">Order Items</th>
                                <th className="font-normal text-left pl-20">Total Cost</th>
                                <th className="font-normal text-left pl-12">Progress</th>
                                <th className="font-normal text-left pl-16">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            {orders.length === 0 ?
                                <tr>
                                    <td colSpan={6} className='text-center'>Nothing to show</td>
                                </tr>
                                :
                                orders.map((order, i) => (
                                    <tr className="h-20 text-sm leading-none text-gray-800 border-b border-t border-slate-300">
                                        <td className=" cursor-pointer">
                                            <div className="flex items-center text-slate-200">
                                                {++i}
                                            </div>
                                        </td>
                                        <td className="pl-12">
                                            <p className="font-medium text-slate-200">Order ID: <span>{order.id}</span>
                                            </p>
                                            <p className="text-xs leading-3 text-slate-300 mt-2">Placed at: <span>{getDate(order.created_at)}</span></p>
                                        </td>


                                        <td className="pl-16">
                                            <div className="flex justify-center flex-col">
                                                {order.items.map(item => (
                                                    <div className="flex items-center">
                                                        <img className="shadow-md w-16 h-16 rounded-box mr-2" src={"/storage/" + item.product.image} /> <span className="text-primary font-medium">{" x " + item.qty}</span>
                                                    </div>
                                                ))}

                                            </div>
                                        </td>

                                        <td className="pl-20">
                                            <p className="font-medium text-primary">${order.total_price}</p>
                                        </td>
                                        <td className="pl-12">
                                            <div className={`badge ${getColor(order.status)} capitalize text-sm`}>{order.status}</div>
                                        </td>
                                        <td className="pl-10">
                                            <Link method="delete" href={route('order.cancel', order.id)} className={`btn btn-error btn-sm text-sm font-normal ${order.status === 'shipped' ? 'btn-disabled' : ''}`}> {order.status === 'completed' ? 'remove' : 'cancel'}</Link>
                                        </td>


                                    </tr>
                                ))
                            }
                        </tbody>

                    </table>

                </div>
            </div>
        </>
    );
}
export default OrderTable;
