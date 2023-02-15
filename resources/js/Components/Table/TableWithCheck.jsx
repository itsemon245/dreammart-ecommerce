import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import { FaMoneyCheckAlt } from 'react-icons/fa'
import { AiFillDelete } from 'react-icons/ai'

export default function TableWithCheck({ items }) {
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
                                <td colSpan={4}>Nothing to show</td>
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
                                                        <img src={`/storage/${item.image}`} alt={item.name} />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div className="font-bold">{item.name} </div>
                                                    <div className="badge badge-secondary font-medium">{item.brand.name}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div className='font-medium text-lg'>
                                                <span>{`$${item.price} X ${item.carts[0].qty} = `}</span>
                                                <span>${item.price * item.carts[0].qty}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div className="flex items-center">
                                                <Link as="button" className='btn bg-transparent p-3 hover:bg-transparent border-0'>
                                                    <FaMoneyCheckAlt className='w-8 h-8 text-primary min-h-8'></FaMoneyCheckAlt> </Link>
                                                <Link as="button" className='btn bg-transparent p-3 hover:bg-transparent border-0'>
                                                    <AiFillDelete className='w-8 h-8 text-secondary min-h-8'></AiFillDelete> </Link>
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
