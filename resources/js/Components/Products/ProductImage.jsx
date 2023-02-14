import React from 'react'
import ClickableThumbnails from '@/Components/Products/ClickableThumbnails'

export default function ProductImage({ src, product, onThumbnailClick }) {
    return (
        <div className="flex justify-center">
            <div className="max-w-[350px]">
                <img src={src} alt={product.name} className="mb-5 w-full object-contain rounded-lg shadow-lg shadow-black hover:scale-105 hover:shadow-gray-800 transition-all" loading="lazy" />
                <ClickableThumbnails product={product} onThumbnailClick={onThumbnailClick} />
            </div>
        </div>);
}