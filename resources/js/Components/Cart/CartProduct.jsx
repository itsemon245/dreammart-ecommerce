import React from 'react'
import { TrashIcon } from '@heroicons/react/24/outline'

export default function CartProduct({ cartProduct }) {
    return (
        <div>
            <section className="">
                <img src="assets/hero-controller.png" alt="" />
                <p className="">
                    Fall Limited Edition Sneakers <br />
                    $125 X <span id="item-count">3</span> =
                    <strong id="total-price">$375</strong>
                </p>
                <TrashIcon className='h-6 w-6 text-primary' />
            </section>
        </div>
    )
}
