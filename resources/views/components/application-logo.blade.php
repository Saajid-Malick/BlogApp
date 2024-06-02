<div class="tooltip-container">
  
  <span class="text">blogmania</span>
</div>

<style>
.tooltip-container {
  --background: #008080;
  background: var(--background);
  position: relative;
  cursor: pointer;
  transition: all 0.2s;
  font-size: 17px;
  border-radius: 10px;
  width: 8em;
  
  display: flex;
  justify-content: center;
  align-items: center;
}

.tooltip {
  position: absolute;
  top: 0;
  left: 30%;
  transform: translateX(-50%);
  padding: 0.3em 0.6em;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
  background: var(--background);
  border-radius: 5px;
  width: 7em;
  text-align: center;
}

.tooltip::before {
  position: absolute;
  content: "";
  height: 0.6em;
  width: 0.6em;
  bottom: -0.2em;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  background: var(--background);
}

.tooltip-container:hover .tooltip {
  top: -100%;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  animation: shake 500ms ease-in-out forwards;
}

@keyframes shake {
  0% {
    transform: rotate(2deg);
  }
  50% {
    transform: rotate(-3deg);
  }
  70% {
    transform: rotate(3deg);
  }

  100% {
    transform: rotate(0deg);
  }
}

.text {
  position: relative;
  padding: 0.7em 1.8em;
  overflow: hidden;
  color: #e6f0f5;
}





</style>