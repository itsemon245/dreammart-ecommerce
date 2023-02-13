import React from "react";
export default function ClickableThumbnails({ onThumbnailClick, product }) {
    return (
        <div className='grid grid-cols-4 gap-x-2'>
            <img onClick={onThumbnailClick} src={`/storage/${product.image}`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
            <img onClick={onThumbnailClick} src={`/assets/image_placeholder.jpg`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
            <img onClick={onThumbnailClick} src={`/assets/image_placeholder.jpg`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
            <img onClick={onThumbnailClick} src={`/assets/image_placeholder.jpg`} alt={product.name} className="w-full object-contain rounded-lg" loading="lazy" />
        </div>
    );
}