import React from 'react'

export default function SortByBtn() {
    return (
        <select defaultValue='default' className="m-2 select py-0 px-3 max-md:select-sm select-primary max-w-max focus:ring-0">
            <option disabled value='default'>Sort By: Default</option>
            <option value="htl">Sort By: High to Low</option>
            <option value="lth">Sort By: Low to High</option>
        </select>
    )
}
