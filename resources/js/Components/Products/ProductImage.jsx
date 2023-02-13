import React from 'react'
import ClickableThumbnails from '@/Components/Products/ClickableThumbnails'

export default function ProductImage({ src, product, onThumbnailClick }) {
    return (<div className="w-[30%] flex flex-col gap-2">
        <img src={src} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
        <ClickableThumbnails product={product} onThumbnailClick={onThumbnailClick} />
    </div>);
}