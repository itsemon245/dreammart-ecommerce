import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import { FaMoneyCheckAlt } from 'react-icons/fa'
import { AiFillDelete } from 'react-icons/ai'
import route from '/vendor/tightenco/ziggy/src/js'

export default function TableWithCheck({ items, userId }) {
    return (
        <>
            <div className="overflow-x-auto w-full">
                <table className="table w-full">

                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        {items.length === 0 ?
                            <tr>
                                <td colSpan={4} className='text-center'>Nothing to show</td>
                            </tr>
                            :
                            <>
                                {items.map((item, i) => (
                                    <tr key={item.id}>
                                        <th>
                                            {++i}
                                        </th>
                                        <td>
                                            <div className="flex items-center space-x-3">
                                                <div className="avatar">
                                                    <div className="aspect-square w-32 rounded-md">
                                                        <img src={`/storage/${item.product.image}`} alt={item.product.name} />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div className="font-bold">{item.product.name} </div>
                                                    <div className="badge badge-secondary font-medium">{item.product.brand.name}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div className='font-medium text-lg'>
                                                <span>{`$${item.product.price} X ${item.qty} = `}</span>
                                                <span>${item.product.price * item.qty}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div className="flex items-center">
                                                <Link method="post"
                                                    href={route('checkout.product', item.product.id)} data={{ qty: item.qty, cartId: item.id }} as="button" className='btn bg-transparent p-3 hover:bg-transparent border-0'>
                                                    <FaMoneyCheckAlt className='w-8 h-8 text-primary min-h-8'></FaMoneyCheckAlt> </Link>
                                                <Link method='DELETE' href={route('cart.destroy', item.id)} className='btn bg-transparent p-3 hover:bg-transparent border-0'>
                                                    <AiFillDelete className='w-6 h-6 text-error min-h-6'></AiFillDelete>
                                                </Link>
                                            </div>
                                        </td>
                                    </tr>
                                ))}
                            </>
                        }
                    </tbody>

                </table>
            </div>
        </>
    )
}
