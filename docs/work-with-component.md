# Work with component

## Create component
Use PascalCase component name

Right:
- Button
- ProductCard

Bad:
- button
- productCard
- product card
---
```
lando acorn make:component ComponentName
```
It create component in folder `resources/views/components`

---
```
lando acorn make:component atoms/ComponentName
```
It create component in folder `resources/views/components/atoms`

---
```
lando acorn make:component atoms/button/ComponentName
```
It create component in folder `resources/views/components/atoms/button`
