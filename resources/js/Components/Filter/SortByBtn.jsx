import React from 'react'

export default function SortByBtn() {
    return (
        <select className="m-2 select py-0 px-3 max-md:select-sm select-primary max-w-max focus:ring-0">
            <option disabled selected value='default'><span>Sort By: </span>Default</option>
            <option value="htl"><span>Sort By: </span>High to Low</option>
            <option value="lth"><span>Sort By: </span>Low to High</option>
        </select>
    )
}
