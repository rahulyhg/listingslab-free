# E2E - End to End Test Component

Component type: __functional__

```javascript
import E2E from './components/E2E/';
```
Include this component in your app. 
It will render a button which the e2e process can click

```javascript
<E2E mode={{
    show:true,
}}/>
```
## props

**mode** 
Use this property to control the component. 
Should be able to show/hide the button & whatnot.

```javascript
let mode ={
    show: true;
}
```

## Legal

Copyright © 2018 Rex Software All Rights Reserved.
