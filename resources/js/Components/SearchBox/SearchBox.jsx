import React from 'react'
import './searchBox.scss';

export default function SearchBox() {
    return (
        <div className='search-box'>
            <img src="assets/search.svg" alt="" />
            <input type="search"
                className='search-field'
                name="search-product"
                id="search-product"
                placeholder='Search products' />
            <img src="assets/filter.svg" alt="" />
        </div>
    )
}
