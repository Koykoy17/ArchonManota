/**
 * Featured Products Quick View & Comparison Modal Component
 */

const PRODUCTS_DATA = {
    1: {
        id: 1,
        name: "Howo v7-x Dump Truck",
        category: "Heavy Duty Dump Truck / 10-Wheeler",
        image: "/images/products/product-truck-1.png",
        desc: "Engineered for high performance, maximum durability, and superior fuel economy in demanding mining and construction operations.",
        specs: {
            engine: "SINOTRUK WD615.47 Euro IV",
            hp: "371 HP @ 2200rpm",
            payload: "30 Tons",
            trans: "HW19710 10-Speed Manual",
            axle: "6x4 Heavy Duty Axle",
            fuel: "400L Aluminum Tank",
            cabin: "HW76 Extended Sleeper Cab"
        }
    },
    2: {
        id: 2,
        name: "Howo v7 Dump Truck",
        category: "Mining & Construction Dump Truck",
        image: "/images/products/product-truck-2.png",
        desc: "Built with reinforced chassis steel and heavy-duty suspension for heavy loads and rugged terrain transportation.",
        specs: {
            engine: "SINOTRUK D10.38 Euro V",
            hp: "380 HP @ 2100rpm",
            payload: "35 Tons",
            trans: "HW19712 12-Speed Manual",
            axle: "6x4 Reinforced Reduction Axle",
            fuel: "400L High-Capacity Tank",
            cabin: "V7 Comfort Ergonomic Cab"
        }
    },
    3: {
        id: 3,
        name: "Howo TX Dump Truck",
        category: "Premium Highway & Mining Dump Truck",
        image: "/images/products/product-truck-3.png",
        desc: "Equipped with German MAN Technology engine and transmission for maximum power output and ultra-low maintenance.",
        specs: {
            engine: "MAN Tech MC11.44 Euro V",
            hp: "440 HP @ 1900rpm",
            payload: "40 Tons",
            trans: "HW25712XST 12-Speed",
            axle: "8x4 Heavy Payload Axle",
            fuel: "500L Aluminum Alloy Tank",
            cabin: "TX High-Roof Luxury Sleeper"
        }
    },
    4: {
        id: 4,
        name: "Howo A7 | T7 Prime Mover",
        category: "Long-Haul Tractor Head / Prime Mover",
        image: "/images/products/product-truck-4.png",
        desc: "Top-of-the-line heavy tractor head designed for long-distance container and trailer hauling across island routes.",
        specs: {
            engine: "SINOTRUK D12.42 Euro V",
            hp: "420 HP @ 2000rpm",
            payload: "50 Tons GCVW",
            trans: "HW19712CL 12-Speed AMT",
            axle: "6x4 Air Suspension Axle",
            fuel: "600L Dual Aluminum Tank",
            cabin: "A7 High-Roof Double Sleeper"
        }
    },
    5: {
        id: 5,
        name: "Howo 7 Prime Truck",
        category: "Heavy Cargo & Logistics Prime Mover",
        image: "/images/products/product-truck-5.png",
        desc: "Reliable workhorse tractor head featuring proven SINOTRUK drivetrain and heavy-duty fifth wheel coupling.",
        specs: {
            engine: "SINOTRUK WD615.96E Euro IV",
            hp: "375 HP @ 2200rpm",
            payload: "45 Tons GCVW",
            trans: "HW19710 10-Speed Manual",
            axle: "6x4 Heavy Duty Axle",
            fuel: "400L Aluminum Tank",
            cabin: "HW79 High-Top Cab"
        }
    },
    6: {
        id: 6,
        name: "Howo A7 | T7 Dump Truck",
        category: "Heavy Mining & Quarry Dump Truck",
        image: "/images/products/product-truck-6.png",
        desc: "High-horsepower 8x4 mining dump truck built for extreme payload capacity and continuous heavy material hauling.",
        specs: {
            engine: "MAN Tech MC13.54 Euro V",
            hp: "540 HP @ 1900rpm",
            payload: "50 Tons Mining Grade",
            trans: "HW25716XST 16-Speed",
            axle: "8x4 Cast Steel Reduction Axle",
            fuel: "600L Heavy Duty Steel Tank",
            cabin: "A7 Reinforced Mining Cab"
        }
    }
};

export function initProductsModal() {
    // Quick View Elements
    const qvModal = document.getElementById('product-quickview-modal');
    const qvBackdrop = document.getElementById('quickview-backdrop');
    const qvClose = document.getElementById('quickview-close');

    const qvImg = document.getElementById('quickview-img');
    const qvTitle = document.getElementById('quickview-title');
    const qvCategory = document.getElementById('quickview-category');
    const qvDesc = document.getElementById('quickview-desc');

    const qvEngine = document.getElementById('quickview-spec-engine');
    const qvHp = document.getElementById('quickview-spec-hp');
    const qvPayload = document.getElementById('quickview-spec-payload');
    const qvTrans = document.getElementById('quickview-spec-trans');
    const qvAxle = document.getElementById('quickview-spec-axle');
    const qvFuel = document.getElementById('quickview-spec-fuel');
    const qvQuoteBtn = document.getElementById('quickview-quote-btn');

    // Compare Elements
    const cmpModal = document.getElementById('product-compare-modal');
    const cmpBackdrop = document.getElementById('compare-backdrop');
    const cmpClose = document.getElementById('compare-close');
    const cmpSelectB = document.getElementById('compare-select-b');
    const cmpPrevBtn = document.getElementById('compare-prev-btn');
    const cmpNextBtn = document.getElementById('compare-next-btn');
    const cmpQuoteBtn = document.getElementById('compare-quote-btn');

    let currentCompareAId = 1;
    let currentCompareBId = 4;

    function openModal(modalEl) {
        if (!modalEl) return;
        modalEl.removeAttribute('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalEl) {
        if (!modalEl) return;
        modalEl.setAttribute('hidden', '');
        document.body.style.overflow = '';
    }

    // Populate Quick View Modal
    function openQuickView(productId) {
        const prod = PRODUCTS_DATA[productId] || PRODUCTS_DATA[1];

        if (qvImg) qvImg.src = prod.image;
        if (qvImg) qvImg.alt = prod.name;
        if (qvTitle) qvTitle.textContent = prod.name;
        if (qvCategory) qvCategory.textContent = prod.category;
        if (qvDesc) qvDesc.textContent = prod.desc;

        if (qvEngine) qvEngine.textContent = prod.specs.engine;
        if (qvHp) qvHp.textContent = prod.specs.hp;
        if (qvPayload) qvPayload.textContent = prod.specs.payload;
        if (qvTrans) qvTrans.textContent = prod.specs.trans;
        if (qvAxle) qvAxle.textContent = prod.specs.axle;
        if (qvFuel) qvFuel.textContent = prod.specs.fuel;

        openModal(qvModal);
    }

    // Populate Compare Column A
    function renderCompareA(prodId) {
        const prod = PRODUCTS_DATA[prodId] || PRODUCTS_DATA[1];
        currentCompareAId = prod.id;

        const img = document.getElementById('compare-img-a');
        const name = document.getElementById('compare-name-a');
        const cat = document.getElementById('compare-cat-a');
        const engine = document.getElementById('compare-engine-a');
        const hp = document.getElementById('compare-hp-a');
        const payload = document.getElementById('compare-payload-a');
        const trans = document.getElementById('compare-trans-a');
        const axle = document.getElementById('compare-axle-a');
        const fuel = document.getElementById('compare-fuel-a');

        if (img) img.src = prod.image;
        if (name) name.textContent = prod.name;
        if (cat) cat.textContent = prod.category;
        if (engine) engine.textContent = prod.specs.engine;
        if (hp) hp.textContent = prod.specs.hp;
        if (payload) payload.textContent = prod.specs.payload;
        if (trans) trans.textContent = prod.specs.trans;
        if (axle) axle.textContent = prod.specs.axle;
        if (fuel) fuel.textContent = prod.specs.fuel;
    }

    // Populate Compare Column B
    function renderCompareB(prodId) {
        const prod = PRODUCTS_DATA[prodId] || PRODUCTS_DATA[4];
        currentCompareBId = prod.id;

        const img = document.getElementById('compare-img-b');
        const name = document.getElementById('compare-name-b');
        const cat = document.getElementById('compare-cat-b');
        const engine = document.getElementById('compare-engine-b');
        const hp = document.getElementById('compare-hp-b');
        const payload = document.getElementById('compare-payload-b');
        const trans = document.getElementById('compare-trans-b');
        const axle = document.getElementById('compare-axle-b');
        const fuel = document.getElementById('compare-fuel-b');

        if (img) img.src = prod.image;
        if (name) name.textContent = prod.name;
        if (cat) cat.textContent = prod.category;
        if (engine) engine.textContent = prod.specs.engine;
        if (hp) hp.textContent = prod.specs.hp;
        if (payload) payload.textContent = prod.specs.payload;
        if (trans) trans.textContent = prod.specs.trans;
        if (axle) axle.textContent = prod.specs.axle;
        if (fuel) fuel.textContent = prod.specs.fuel;

        if (cmpSelectB) cmpSelectB.value = String(prod.id);
    }

    function openCompare(productId) {
        renderCompareA(productId);

        // Pick a default target truck different from A
        let targetBId = productId === 4 ? 1 : 4;
        renderCompareB(targetBId);

        openModal(cmpModal);
    }

    // Attach Event Listeners to Product Cards (Desktop & Mobile)
    document.querySelectorAll('.product-card').forEach((card, idx) => {
        const prodId = idx + 1;

        const qvBtn = card.querySelector('.product-card__btn--quickview');
        const cmpBtn = card.querySelector('.product-card__btn--compare');

        if (qvBtn) {
            qvBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                openQuickView(prodId);
            });
        }

        if (cmpBtn) {
            cmpBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                openCompare(prodId);
            });
        }

        // On mobile, tapping product image also opens Quick View
        const imgWrap = card.querySelector('.product-card__image-wrap');
        if (imgWrap) {
            imgWrap.addEventListener('click', () => {
                openQuickView(prodId);
            });
        }
    });

    // Close Listeners
    if (qvClose) qvClose.addEventListener('click', () => closeModal(qvModal));
    if (qvBackdrop) qvBackdrop.addEventListener('click', () => closeModal(qvModal));

    if (cmpClose) cmpClose.addEventListener('click', () => closeModal(cmpModal));
    if (cmpBackdrop) cmpBackdrop.addEventListener('click', () => closeModal(cmpModal));

    // Slideshow Navigation for Compare Truck B
    if (cmpPrevBtn) {
        cmpPrevBtn.addEventListener('click', () => {
            let nextB = currentCompareBId - 1;
            if (nextB < 1) nextB = 6;
            if (nextB === currentCompareAId) {
                nextB = nextB - 1 < 1 ? 6 : nextB - 1;
            }
            renderCompareB(nextB);
        });
    }

    if (cmpNextBtn) {
        cmpNextBtn.addEventListener('click', () => {
            let nextB = currentCompareBId + 1;
            if (nextB > 6) nextB = 1;
            if (nextB === currentCompareAId) {
                nextB = nextB + 1 > 6 ? 1 : nextB + 1;
            }
            renderCompareB(nextB);
        });
    }

    if (cmpSelectB) {
        cmpSelectB.addEventListener('change', (e) => {
            renderCompareB(parseInt(e.target.value, 10));
        });
    }

    // Scroll to Quote CTA buttons from modals
    [qvQuoteBtn, cmpQuoteBtn].forEach(btn => {
        if (btn) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                closeModal(qvModal);
                closeModal(cmpModal);

                const quoteSec = document.getElementById('quote');
                if (quoteSec) {
                    quoteSec.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });

    // Escape Key Handler
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal(qvModal);
            closeModal(cmpModal);
        }
    });
}
