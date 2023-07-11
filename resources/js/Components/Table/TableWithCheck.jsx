import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import { FaMoneyCheckAlt } from 'react-icons/fa'
import { AiFillDelete } from 'react-icons/ai'
import route from '/vendor/tightenco/ziggy/src/js'
import useImage from '@/helper/useImage'
import TableRow from './TableRow'

export default function TableWithCheck({ items, userId }) {
    return (
        <>
            <div className="overflow-x-auto w-full">
                <table className="table w-full">

                    <thead>
                        <tr>
                            <th className='z-reset'>
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
                                    <TableRow key={i} keyVal={i} item={item} />
                                ))}
                            </>
                        }
                    </tbody>

                </table>
            </div>
        </>
    )
}
